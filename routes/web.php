<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function(){

    Route::get('/home', [HomeController::class , 'index']);

    #User
    Route::get('/list', [UserController::class , 'list']);
    
    Route::get('/create', [UserController::class , 'create']);
    Route::post('/create', [UserController::class , 'store']);

    Route::get('edit/{user}', [UserController::class,'show']);

    // Route::delete('/delete/{id}', [UserController::class,'destroy']);
    Route::post('/delete', [UserController::class,'destroy']);


    Route::get('/dashboard', [HomeController::class , 'dashboard']);
});
