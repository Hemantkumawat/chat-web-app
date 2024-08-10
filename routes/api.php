<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
Route::post('send-message', [ChatController::class, 'sendMessage']);
Route::get('messages', [ChatController::class, 'getMessages']);
