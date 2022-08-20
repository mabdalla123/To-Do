<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ToDoController;
use App\Models\ToDo;
use Illuminate\Support\Facades\Route;


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



Route::middleware('guest')-> group(function (){

    // Guest routs
    Route::post('login',[AuthController::class,'Login'])->name('login');
    Route::get('logout', [AuthController::class,'logout'])->name('logout');
    Route::post('register', [AuthController::class,'register'])->name('register');
});

Route::middleware('auth:sanctum')-> group(function (){

    Route::apiResource('todo',ToDoController::class);
 
});


