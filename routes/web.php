<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;


Route::post('/login', [DefaultController::class, 'login']);
Route::get('/', [DefaultController::class, 'index']);
Route::get('/files', [DefaultController::class, 'files']);
Route::post('/file-upload', [DefaultController::class, 'fileUpload']);
Route::get('/file-delete/{id}', [DefaultController::class, 'fileDelete']);
