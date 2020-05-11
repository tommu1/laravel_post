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
});

Route::get('/archives', function () {
    return "記事一覧";
});

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/index', "IndexController@index");

// Route::resource('article.', 'PostController');

// 一覧画面
Route::get('/article', 'PostController@index');

//作成画面
Route::get('/article/create', 'PostController@create')->name("article.create");

//詳細画面
Route::get('/article/{id}', 'PostController@show')->where('id','\d+') ->name("article.show");

Route::post('/article/store', 'PostController@store');

Route::get('/article/edit/{id}', 'PostController@edit');

Route::post('/article/update/{id}', 'PostController@update');

Route::post('/article/destroy/{id}', 'PostController@destroy');
// Route::get("/article/create", function(){
//     return view("article/create");
// });