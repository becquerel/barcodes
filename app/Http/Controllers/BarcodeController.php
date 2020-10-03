<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeController extends Controller
{
    public function html($barcode, BarcodeGeneratorHTML $generator, Request $request)
    {
        return response($generator->getBarcode($barcode, $generator::TYPE_CODE_39));
    }

    public function png($barcode, BarcodeGeneratorPNG $generator, Request $request)
    {
        return response(
            $generator->getBarcode($barcode, $generator::TYPE_CODE_39),
            200,
            ['content-type' => 'image/png']
        );
    }

    public function jpg($barcode, BarcodeGeneratorJPG $generator)
    {
        return response(
            $generator->getBarcode($barcode, $generator::TYPE_CODE_39),
            200,
            ['content-type' => 'image/jpeg']
        );
    }
}
