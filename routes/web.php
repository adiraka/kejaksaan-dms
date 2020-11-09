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
    return redirect()->route('admin.getLogin');
});

Route::prefix('admin')->group(function() {
    Route::get('/', function () {
        return redirect()->route('admin.getLogin');
    });

    Route::middleware(['guest'])->group(function() {
        Route::get('login', 'Admin\AuthController@getLoginPage')->name('admin.getLogin');
        Route::post('login', 'Admin\AuthController@postLogin')->name('admin.postLogin');
    });

    Route::middleware(['auth'])->group(function() {
        Route::get('dashboard', 'Admin\DashboardController@getDashboard')->name('admin.dashboard');
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');

        Route::get('prosecutors', 'Admin\ProsecutorController@index')->name('prosecutor.index');
        Route::get('prosecutorsData', 'Admin\ProsecutorController@indexData')->name('prosecutor.indexData');
        Route::get('prosecutor/{id?}', 'Admin\ProsecutorController@detail')->name('prosecutor.detail');
        Route::post('prosecutor/{id?}', 'Admin\ProsecutorController@save')->name('prosecutor.save');
        Route::get('prosecutorFind', 'Admin\ProsecutorController@find')->name('prosecutor.find');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
