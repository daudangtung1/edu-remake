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
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->group(function (){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('teacher', 'TeacherController')->except('show', 'edit', 'update');
    Route::resource('class', 'ClassroomController')->except('show', 'edit', 'update');
});
