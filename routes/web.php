<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function() {
    return response('GetBarcode.xyz');
});

$router->get('/barcode', 'BarcodeController@html');
$router->get('/barcode/png', 'BarcodeController@png');
$router->get('/barcode/jpg', 'BarcodeController@jpg');

// Routes to make this compatible with previous system
$router->get('/barcode/barcode_img.php', 'BarcodeController@png');
