<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

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


route::controller(SystemController::class)->group(function(){
    Route::get('login', 'index')->name('login');

    Route::get('shop', 'shop')->name('shop');

    Route::get('register', 'register')->name('register');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_register', 'validate_register')->name('show.validate_register');

    Route::post('validate_login', 'validate_login')->name('show.validate_login');

    Route::get('add_product','add_product')->name('show.add_product');

    Route::post('validate_product','validate_product')->name('show.validate_product');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});