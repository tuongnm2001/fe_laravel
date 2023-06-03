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

Route::prefix('admin')->group(function(){

    Route::get('/home', [HomeController::class , 'index']);

    #User
    Route::get('/listService', [UserController::class , 'listService']);
    
    Route::get('/createNewUser', [UserController::class , 'create']);
    Route::post('/createNewUser', [UserController::class , 'store']);

    Route::get('/dashboard', [HomeController::class , 'dashboard']);
});
