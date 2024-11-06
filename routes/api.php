<?php

use Illuminate\Http\Request;
use App\Http\Controllers\DownloadController;

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

// Route::apiResource('download', DownloadController::class);
// Route::get('/download', [DownloadController::class, 'show']);
// Route::get('/update', [DownloadController::class, 'update']);
// Route::post('/proposal', [DownloadController::class, 'clientProposalPdf']);

Route::post('/download/mortgage', [DownloadController::class, 'mortgagePdf']);
Route::post('/download/buyout', [DownloadController::class, 'buyoutPdf']);
Route::post('/download/dbr', [DownloadController::class, 'dbrPdf']);