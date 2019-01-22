<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeController extends Controller
{
    public function html(BarcodeGeneratorHTML $generator, Request $request)
    {
        $code = $request->get('num', '00000000');
        return response($generator->getBarcode($code, $generator::TYPE_CODE_39));
    }

    public function png(BarcodeGeneratorPNG $generator, Request $request)
    {
        $code = $request->get('num', '00000000');
        return response($generator->getBarcode($code, $generator::TYPE_CODE_39), 200, ['content-type' => 'image/png']);
    }

    public function jpg(BarcodeGeneratorJPG $generator, Request $request)
    {
        $code = $request->get('num', '00000000');
        return response($generator->getBarcode($code, $generator::TYPE_CODE_39), 200, ['content-type' => 'image/jpeg']);
    }

    //
}
