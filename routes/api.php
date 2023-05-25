<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controller\Api\AuthControler;
use  App\Http\Controller\Api\AttendanceController;


Route::post('/login',[AuthControler::class,'login']);
Route::post('/register',[AuthControler::class,'register']);

Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/courses',[AttendanceController::class, 'courses']);
    Route::get('/apprentices/{id}',[AttendanceController::class, 'apprentices']);

});







