<?php

namespace App\Repositories;

use App\Models\Attachment;
use App\Repositories\Interfaces\AttachmentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File as FileSystem;
use Illuminate\Support\Facades\App;

class AttachmentRepository extends BaseRepository implements AttachmentRepositoryInterface
{
    private $path;

    private $with = [
        'createdUser:id,fullname', 'updatedUser:id,fullname', 'deletedUser:id,fullname'
    ];

    public function __construct(Attachment $model)
    {
        parent::__construct($model);
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function getPath() {
        return $this->path;
    }

    public function getUploadDirectory() {
        return public_path() . '/' . $this->getPath();
    }

    public function upload(UploadedFile $file) {
        $uploadDirectory = $this->getUploadDirectory();
        FileSystem::isDirectory($uploadDirectory) or FileSystem::makeDirectory($uploadDirectory, 0777, true, true);

        $uploadedFilePath = Storage::putFile($this->getPath(), new File($file->path()));

        $data = [
            'name' => basename($uploadedFilePath),
            'content_type' => $file->getClientMimeType(),
            'extension' => $file->extension(),
            'size' => $file->getSize(),
            'path' => $this->getPath()
        ];

        return $data;
    }

    public function remove($id) {
        $attachment = $this->getDetails($id);

        if(isset($attachment->name)) {
            $file = $this->getPath() . '/' . $attachment->name;

            if(App::environment('local')) {
                $file = preg_replace('#/#','\\',$file);
            }

            Storage::delete($file);
        }
    }

    public function create(array $data) {
        $data = $this->upload($data['file']);

        return parent::create($data);
    }

    public function update(array $data, $id) {
        $this->remove($id);

        $data = $this->upload($data['file']);

        return parent::update($data, $id);
    }

    public function delete($id)
    {
        $this->remove($id);

        return parent::delete($id);
    }

    public function getDetails($id, $with = false) {
        try {
            $attachment = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }
        return $attachment;
    }
}