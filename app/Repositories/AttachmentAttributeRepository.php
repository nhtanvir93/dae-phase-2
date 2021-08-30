<?php
namespace App\Repositories;

use App\Models\AttachmentAttribute;
use App\Repositories\Interfaces\AttachmentAttributeRepositoryInterface;

class AttachmentAttributeRepository extends BaseRepository implements AttachmentAttributeRepositoryInterface
{
    const TYPE_VALUE_FIELDS = [
        'NUMBER' => 'value_no',
        'DATE' => 'value_date',
        'TEXT' => 'value_text',
        'LONG_TEXT' => 'value_long_text'
    ];

    public function __construct(AttachmentAttribute $model)
    {
        parent::__construct($model);
    }

    public function createAll($attachmentAttributes, $configAttachmentId, $applicationId) {
        $data = [];

        foreach($attachmentAttributes as $attachmentAttribute) {
            $attributeId = $attachmentAttribute['id'];

            $data[] = [
                'id' => $attributeId,
                'value' => $attachmentAttribute['value']
            ];

            $singleAttachmentAttribute = [
                'application_id' => $applicationId,
                'config_attachment_id' => $configAttachmentId,
                'config_attachment_attribute_id' => $attributeId,
                $this->getAttributeFieldValue($attributeId) => $attachmentAttribute['value']
            ];

            parent::create($singleAttachmentAttribute);
        }

        if(count($data) > 0) {
            return $this->updateCorrespondingModelField($applicationId, $data);
        }

        return [];
    }

    public function getAttributeFieldValue($attachmentAttributeId) {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        $attribute = $configAttachmentAttributeRepository->getDetails($attachmentAttributeId);
        return self::TYPE_VALUE_FIELDS[$attribute['type']];
    }

    public function updateAll($attachmentAttributes, $configAttachmentId, $applicationId) {
        $this->deleteAll($applicationId);
        return $this->createAll($attachmentAttributes, $configAttachmentId, $applicationId);
    }

    public function deleteAll($applicationId) {
        $this->model->where('application_id', $applicationId)->delete();
    }

    public function updateCorrespondingModelField($applicationId, $data) {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $repositoryMapping = [
            '',
            'App\Repositories\Interfaces\PcDetailRepositoryInterface',
            'App\Repositories\Interfaces\RoDetailRepositoryInterface',
            'App\Repositories\Interfaces\IpDetailRepositoryInterface'
        ];

        $application = $applicationRepository->getDetails($applicationId);

        $repository = resolve($repositoryMapping[$application->app_type_id]);

        $configAttachmentAttributeIds = array_column($data,'id');
        $configAttachmentAttributes = $configAttachmentAttributeRepository->getInputFieldNames($configAttachmentAttributeIds);

        if($configAttachmentAttributes->count() == 0) {
            return [];
        }

        $updateData = [];

        foreach($configAttachmentAttributes as $configAttachmentAttribute) {
            $key = array_search($configAttachmentAttribute->id, $configAttachmentAttributeIds);
            $value = $data[$key]['value'];

            $updateData[$configAttachmentAttribute->input_field_name] = $value;
        }

        return $updateData;
    }
}