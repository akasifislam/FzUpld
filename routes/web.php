<?php

use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/file', [FileUpload::class, 'createForm']);
Route::post('/file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
