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

Route::get('/', 'HomepageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('teacher', 'TeacherController')->except('show', 'edit', 'update');
    Route::resource('class', 'ClassroomController')->except('show', 'edit', 'update');
    Route::resource('category', 'CategoryController')->except('edit', 'update', 'create');
    Route::resource('test', 'TestController')->except('edit', 'update', 'delete');
    Route::get('/test/detail/{id}', 'TestQuestionController@show')->name('questionShow');
    Route::resource('category-blog', 'CategoryBlogController')->except('show', 'edit', 'update', 'delete', 'create');
    Route::get('category-blog/{category_blog_id}', 'CategoryBlogController@postIndex')->name('ShowPostFormCat');

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

    Route::namespace('Page')->group(function () {
        Route::get('/index-page', 'HomeController@index')->name('indexPage');
        Route::get('/index-page/create', 'HomeController@create')->name('indexCreate');
        Route::post('/index-page/create', 'HomeController@store')->name('indexStore');
        Route::get('/index-page/edit', 'HomeController@edit')->name('indexEdit');
        Route::post('/index-page/edit', 'HomeController@update')->name('indexUpdate');
//        Route::get('/index-page', 'HomeController@delete');
    });
});
