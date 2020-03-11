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

Route::get('/examinee','ExHPController@add');
Route::post('/examinee','ExHPController@create');

Route::group(['prefix' => 'student'], function(){
    Route::get('questions/input','Student\ExController@add')->middleware('auth');
    Route::post('questions/input','Student\ExController@create')->middleware('auth');
    Route::get('questions','Student\ExController@index')->middleware('auth');
    Route::get('users','Student\UsersController@add')->middleware('auth');
    Route::post('users','Student\UsersController@create')->middleware('auth');
    
});

Route::group(['prefix' => 'mentor'], function(){
    Route::get('questions','Mentor\QuestionController@index');
});

Route::group(['prefix' => 'common'],function(){
    Route::get('questions/{id}','Common\AnswerController@show');
    Route::post('answers/create','Common\AnswerController@create')->middleware('auth');
    Route::post('answers/finish','Student\ExController@finish')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('examinee/HP','Admin\ExHPController@add');
    Route::post('examinee/HP','Admin\ExHPController@create');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


