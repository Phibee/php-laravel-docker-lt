<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
use Endroid\QrCode\Response\QrCodeResponse;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    public function generateVCard(Request $request)
    {
        $fName = $request->query('firstName') ? $request->query('firstName') : ''; 
        $lName = $request->query('lastName') ? $request->query('lastName') : '';
        $orgName = $request->query('org') ? $request->query('org') : '';
        $cellNum = $request->query('cellNum') ? $request->query('cellNum') : '';
        $workNum = $request->query('workNum') ? $request->query('workNum') : '';
        $emailAdd = $request->query('emailAdd') ? $request->query('emailAdd') : '';
        $writer = new PngWriter();

         $vCard = "BEGIN:VCARD\n" .
                 "VERSION:3.0\n" .
                 "FN;CHARSET=UTF-8:".$fName." ".$lName."\n" .
                 "N;CHARSET=UTF-8:".$lName.";".$fName."\n" .
                 "ORG;CHARSET=UTF-8:".$orgName."\n" .
                 "EMAIL;CHARSET=UTF-8:".$emailAdd."\n" .
                 "TEL;TYPE=CELL,VOICE:".$cellNum."\n" .
                 "TEL;TYPE=WORK,VOICE:".$workNum."\n" .
                 "END:VCARD";

        // Create QR code
        $qrCode = new QrCode($vCard);

        $logoPath = public_path('img/thumb_logo.png');

        $logo = new Logo(
            path: $logoPath,
            resizeToWidth: 100,
            punchoutBackground: false
        );

        $result = $writer->write($qrCode, $logo, null);

        $dataUri = $result->getDataUri();

        $imageData = explode(',', $dataUri)[1]; // Get the part after the comma
        $image = base64_decode($imageData);


         $mimeType = 'image/png';
        //  return Response::make($image, 200)->header("Content-Type", $mimeType);
        return $dataUri;
    }
}
