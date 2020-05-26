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

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signin');
});

Route::post('user-resgister','UserController@Signup')->name('user_reg');

Route::post('user-login','UserController@Login')->name('user_login');

Route::group(['middleware'=>['CheckLogin']], function () {
    Route::get('/','BlogController@Index');
    /*Route::get('/', function () {
        return view('welcome');
    });*/
    Route::get('/add-blog/{id?}','BlogController@AddBlog');
    /*Route::get('/add-blog/{id?}', function () {
        return view('add-blog');
    });*/
    
    Route::post('save-blog','BlogController@Store')->name('save_blog');
    Route::get('/blog/{id}','BlogController@Show');

    Route::get('/remove/{id}','BlogController@destroy');

});
Route::get('user_logout','UserController@UserLogout')->name('user-logout');




