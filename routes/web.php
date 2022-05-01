<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadFileController;
 
Route::get('ajax-file-upload-progress-bar', [UploadFileController::class, 'index']);
Route::post('store', [UploadFileController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});
