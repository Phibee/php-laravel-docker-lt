<?php

use Illuminate\Http\Request;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ImageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/download/mortgage', [DownloadController::class, 'mortgagePdf']);
Route::post('/download/buyout', [DownloadController::class, 'buyoutPdf']);
Route::post('/download/dbr', [DownloadController::class, 'dbrPdf']);
Route::post('/download/proposal', [DownloadController::class, 'proposalPdf']);
// Route::get('/download/proposal', [DownloadController::class, 'viewpdf']);
// Route::get('/download/proposal', function () {
//     return view('pdf/pdf-sample');
// });

Route::get('/image/qrcode-vcard', [ImageController::class, 'generateVCard']);
