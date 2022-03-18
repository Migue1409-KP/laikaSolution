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

Route::get('/', 'usersController@index') -> name('user.index');
Route::get('/user/create', 'usersController@getCreate') -> name('user.create');
Route::post('/user/submit', 'usersController@submitUser') -> name('user.submit');

Route::get('/subject/create{user}', 'subjectController@getCreate') -> name('subject.create');
Route::post('/subject/submit{user}', 'subjectController@submitSubject') -> name('subject.submit');

Route::get('/user/edit{user}', 'subjectController@getUpdate') -> name('subject.edit');
Route::post('/user/create{subject}', 'subjectController@update') -> name('subject.update');


Route::get('/user/edit/{user}', 'usersController@getUpdate') -> name('user.edit');
Route::post('/user/edit/{user}', 'usersController@update') -> name('user.update');

Route::post('/user/delete/{user}', 'usersController@destroy') -> name('user.destroy');



