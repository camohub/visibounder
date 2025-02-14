<?php


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/', [DefaultController::class, 'index']);
Route::get('/files', [DefaultController::class, 'files']);
Route::post('/file-upload', [DefaultController::class, 'fileUpload']);
Route::get('/file-delete/{id}', [DefaultController::class, 'fileDelete']);
