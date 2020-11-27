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

Route::namespace('Admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('teacher', 'TeacherController')->except('show', 'edit', 'update');
    Route::resource('class', 'ClassroomController')->except('show', 'edit', 'update');
    Route::resource('category', 'CategoryController')->except('edit', 'update', 'create');
    Route::resource('test', 'TestController')->except('edit', 'update', 'delete');
    Route::get('/test/detail/{id}', 'TestQuestionController@show')->name('questionShow');

    Route::group(['prefix' => 'post'], function () {
        Route::get('/', [
            'uses' => 'PostController@index',
            'as' => 'post.index'
        ]);

        Route::get('/{id}', [
            'uses' => 'PostController@show',
            'as' => 'post.show'
        ]);

        Route::post('/', [
            'uses' => 'PostController@store',
            'as' => 'post.store'
        ]);

        Route::put('/{id}', [
            'uses' => 'PostController@update',
            'as' => 'post.update'
        ]);

        Route::delete('/{id}', [
            'uses' => 'PostController@destroy',
            'as' => 'post.destroy'
        ]);
    });
});
