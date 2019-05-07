<?php

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
Route::resource('passports', 'PassportController');

Auth::routes();

Route::resource('users', 'HomeController');
Route::post('users/{id}', 'HomeController@update');
Route::get('wellcome', 'HomeController@index');

Route::get('home', 'HomeController@home');

Route::get('user/profile/{id}', 'HomeController@profile')->name('user.profile');

Route::get('user-name/{id}', 'HomeController@showbyname');

Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');
// Route::group(['middleware' => ['auth']], function() {
//     Route::get('categories', 'CategoryController@index')->name('category.index');
// });
Route::get('categories', 'CategoryController@index')->name('category.index');

Route::group(['middleware' => ['auth']], function() {
    Route::get('post/create', 'PostController@create')->name('post.create');
    Route::post('post/store', 'PostController@store')->name('post.store');
    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('post/show/{id}', 'PostController@show')->name('post.show');
    Route::post('comment/store', 'CommentController@store')->name('comment.add');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('car/create', 'CarController@create')->name('car.create');
    Route::get('cars', 'CarController@index')->name('cars');
    Route::post('search/name', 'CarController@searchName')->name('Car.searchName');
});
