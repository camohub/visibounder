<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;

// AUTH
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordLogin']);

// DEFAULT
Route::get('/', [DefaultController::class, 'index']);
Route::get('/lang/{lang}', [DefaultController::class, 'setLang']);

// FILES
Route::get('/files', [DefaultController::class, 'files']);
Route::post('/file-upload', [FilesController::class, 'fileUpload']);
Route::get('/file-delete/{id}', [FilesController::class, 'fileDelete']);

