<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class ConvertBase64toFile
{
    private function getUploadedFile($attachment) {
        if(strlen($attachment) == 0) {
            return '';
        }

        $base64File = $attachment;

        $imagePattern = '#^data:image/\w+;base64,#i';
        $pdfPattern = '#^data:application/pdf;base64,#i';

        $canConvert = false;

        if(preg_match($imagePattern, $base64File)) {
            $canConvert = true;
            $fileData = base64_decode(preg_replace($imagePattern, '', $base64File));
        } elseif (preg_match($pdfPattern, $base64File)) {
            $canConvert = true;
            $fileData = base64_decode(preg_replace($pdfPattern, '', $base64File));
        }

        if($canConvert) {
            $tmpFilePath = sys_get_temp_dir() . '/' . Str::uuid()->toString();
            file_put_contents($tmpFilePath, $fileData);

            $tmpFile = new File($tmpFilePath);
            $file = new UploadedFile(
                $tmpFile->getPathname(),
                $tmpFile->getFilename(),
                $tmpFile->getMimeType(),
                0,
                true // Mark it as test, since the file isn't from real HTTP POST.
            );

            return $file;
        }
    }

    public function handle($request, Closure $next)
    {
        if($request->attachments || $request->userAttachments || $request->app_attachments) {
            $givenAttachments = [];

            if(isset($request->attachments)) {
                $givenAttachments[] = [
                    'title' => 'attachments',
                    'attachments' => $request->attachments
                ];
            }
            if(isset($request->userAttachments)) {
                $givenAttachments[] = [
                    'title' => 'userAttachments',
                    'attachments' => $request->userAttachments
                ];
            }
            if(isset($request->app_attachments)) {
                $givenAttachments[] = [
                    'title' => 'app_attachments',
                    'attachments' => $request->app_attachments
                ];
            }

            foreach($givenAttachments as $givenAttachment) {
                $attachments = $givenAttachment['attachments'];

                foreach($attachments as $key => $attachment) {
                    $attachment = (isset($attachment['attachment']) && !is_array($attachment['attachment']) ? $attachment['attachment'] : (
                        $attachment  && !is_array($attachment) ? $attachment : ''
                        )
                    );

                    $file = $this->getUploadedFile($attachment);

                    if($givenAttachment['title'] == 'attachments' && $file instanceof UploadedFile) {
                        $tempAttachments = $request->attachments;
                        $tempAttachments[$key] = $file;
                        $request->request->add(['attachments' => $tempAttachments]);
                    } elseif ($givenAttachment['title'] == 'userAttachments'  && $file instanceof UploadedFile) {
                        $tempAttachments = $request->userAttachments;
                        $tempAttachments[$key]['attachment'] = $file;
                        $request->request->add(['userAttachments' => $tempAttachments]);
                    } elseif ($givenAttachment['title'] == 'app_attachments' && $file instanceof UploadedFile) {
                        $tempAttachments = $request->app_attachments;
                        $tempAttachments[$key]['attachment'] = $file;
                        $request->request->add(['app_attachments' => $tempAttachments]);
                    }
                }
            }
        } elseif ($request->task_fields) {
            $tempTaskFields = $request->task_fields;

            foreach($request->task_fields as $key => $taskField) {
                $attachment = isset($taskField['attachment']) ? $taskField['attachment'] : null;

                if(!$attachment) {
                    continue;
                }

                $file = $this->getUploadedFile($attachment);

                $tempTaskFields[$key]['attachment'] = $file;
            }

            $request->request->add(['task_fields' => $tempTaskFields]);
        }

        return $next($request);
    }
}
