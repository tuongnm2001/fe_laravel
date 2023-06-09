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
    return view('admin.welcome');
});

Route::prefix('users')->group(function(){

    Route::get('/home', [HomeController::class , 'index'])->name('home');

    #User
    Route::get('/list', [UserController::class , 'list'])->name('user.list');
    
    Route::get('/create', [UserController::class , 'create'])->name('users.create');
    Route::post('/create', [UserController::class , 'store'])->name('users.create');

    Route::get('edit/{user}', [UserController::class,'show'])->name('users.edit');

    // Route::delete('/delete/{id}', [UserController::class,'destroy']);
    Route::post('/delete', [UserController::class,'destroy'])->name('users.destroy');


    Route::get('/dashboard', [HomeController::class , 'dashboard'])->name('users.dashboard');
});
