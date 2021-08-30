<?php
namespace App\Repositories;

use PDF;
use App\Models\Application;
use App\Repositories\Interfaces\DocumentSignerRepositoryInterface;

class DocumentSignerRepository extends BaseRepository implements DocumentSignerRepositoryInterface
{
    public function __construct(Application $model)
    {
        parent::__construct($model);
    }

    public function create($content)
    {
        try {
            /*$certPath = 'file://'.public_path("asset\certificate.pem");

            $info = array(
                'Name' => 'TCPDF',
                'Location' => 'Office',
                'Reason' => 'Testing TCPDF',
                'ContactInfo' => 'http://www.tcpdf.org',
            );

            PDF::setSignature($certificate, $certificate, '', '', 2, $info);*/

            PDF::SetFont('helvetica', '', 12);
            PDF::SetTitle('সোনার বাংলা');
            PDF::AddPage();

            // add view content
            PDF::writeHTML($content, true, 0, true, 0);

            // add image for signature
            // PDF::Image('tcpdf.png', 180, 60, 15, 15, 'PNG');

            // define active area for signature appearance
            PDF::setSignatureAppearance(180, 60, 15, 15);

            // save pdf file
            // PDF::Output(public_path('asset\hello_world.pdf'), 'F');
            return PDF::Output('certificate.pdf', 'E');

            // PDF::reset();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}