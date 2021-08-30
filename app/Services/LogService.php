<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FileSystem;

class LogService
{
    private $directory;

    public function __construct()
    {
        $this->directory = 'logs/';
    }

    public function writeLog($fileName, $message, $isDailyLog = 0) {
        FileSystem::isDirectory($this->directory)
            or FileSystem::makeDirectory($this->directory, 0777, true, true);

        if($isDailyLog) {
            $fileName = $fileName . '_' . now()->format('Y_m_d') . '.txt';
        }

        $filePath = $this->directory . $fileName;

        if(Storage::exists($filePath)) {
            return Storage::append($filePath, $message);
        } else {
            return Storage::put($filePath, $message);
        }
    }
}