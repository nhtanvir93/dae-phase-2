<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
    public function __construct(Profile $model)
    {
        parent::__construct($model);
    }

    public function manage(array $data) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $addressRepository = resolve('App\Repositories\Interfaces\AddressRepositoryInterface');

        $profile = $this->getDetails(auth()->user()->id);

        return DB::transaction(function() use ($attachmentRepository, $userRepository, $addressRepository, $data, $profile) {

            $userRepository->update($data['users'], auth()->user()->id);

            if(isset($data['addresses']['permanent_address'])) {
                $data['profiles']['permanent_address_id'] = isset($profile->permanent_address_id) ?
                    $addressRepository->update($data['addresses']['permanent_address'], $profile->permanent_address_id)
                    : $addressRepository->create($data['addresses']['permanent_address']);
            }

            $data['profiles']['present_address_id'] = isset($profile->present_address_id) ?
                $addressRepository->update($data['addresses']['present_address'], $profile->present_address_id)
                : $addressRepository->create($data['addresses']['present_address']);

            if(isset($data['attachments']['photo'])) {
                $attachmentRepository->setPath(config('app_constants.path.photo'));
                $file = [
                    'file' => $data['attachments']['photo']
                ];

                $data['profiles']['photo_attachment_id'] = isset($profile->photo_attachment_id) ?
                    $attachmentRepository->update($file, $profile->photo_attachment_id)
                    : $attachmentRepository->create($file);
            }

            if(isset($data['attachments']['signature'])) {
                $attachmentRepository->setPath(config('app_constants.path.signature'));
                $file = [
                    'file' => $data['attachments']['signature']
                ];

                $data['profiles']['signature_attachment_id'] = isset($profile->signature_attachment_id) ?
                    $attachmentRepository->update($file, $profile->signature_attachment_id)
                    : $attachmentRepository->create($file);
            }

            if(isset($data['attachments']['contact_person_photo'])) {
                $attachmentRepository->setPath(config('app_constants.path.photo'));
                $file = [
                    'file' => $data['attachments']['contact_person_photo']
                ];

                $data['profiles']['contact_person_photo_attachment_id'] = isset($profile->contact_person_photo_attachment_id) ?
                    $attachmentRepository->update($file, $profile->contact_person_photo_attachment_id)
                    : $attachmentRepository->create($file);
            }

            if(isset($data['attachments']['contact_person_signature'])) {
                $attachmentRepository->setPath(config('app_constants.path.signature'));
                $file = [
                    'file' => $data['attachments']['contact_person_signature']
                ];

                $data['profiles']['contact_person_signature_attachment_id'] = isset($profile->contact_person_signature_attachment_id) ?
                    $attachmentRepository->update($file, $profile->contact_person_signature_attachment_id)
                    : $attachmentRepository->create($file);
            }

            unset($data['profiles']['applicant_type']);
            return $profile ? parent::update($data['profiles'], $profile->id) : parent::create($data['profiles']);
        });
    }

    public function getDetails($userId) {
        return $this->model
            ->with(['user', 'user.areaVatCode', 'presentAddress'])
            ->where('user_id', $userId)
            ->first();
    }

    public function getUserFullNames($userIds) {
        return $this->model
            ->select('id', 'user_id', 'fullname')
            ->whereIn('user_id', $userIds)
            ->get();
    }
}