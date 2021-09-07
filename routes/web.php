<?php

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Object\HomeController as ObjectHomeController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('object', [ObjectHomeController::class, 'index'])->name('object');

Route::group(
    [
        'prefix'=> 'admin',
        'as' => 'admin.',
        'middleware' => ['auth'],
    ],
    function (){
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
        Route::resource('users', UsersController::class);
    }
);
