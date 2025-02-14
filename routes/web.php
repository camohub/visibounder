<?php


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordLogin']);

Route::get('/', [DefaultController::class, 'index']);
Route::get('/files', [DefaultController::class, 'files']);
Route::post('/file-upload', [DefaultController::class, 'fileUpload']);
Route::get('/file-delete/{id}', [DefaultController::class, 'fileDelete']);

Route::get('/lang/{lang}', [DefaultController::class, 'changeLang']);
