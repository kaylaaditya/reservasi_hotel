<?php

use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::view('kamar', 'kamar')->name('kamar');


// Route::view('admin', 'layouts.admin');

// Route::view(config('admin.path').'/login', 'auth.login')->name('admin.login');


Route::group([
    'prefix' => config('admin.path'),
], function () {
    Route::get('login', 'LoginAdminController@formLogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');

        Route::view('/', 'dashboard')->name('dashboard');

        Route::group(['middleware' => ['can:role,"admin"']], function () {
            // Route::view('admin', 'admin.index')->name('admin.index');
            Route::resource('/admin', 'AdminController');
        });
    });
});
