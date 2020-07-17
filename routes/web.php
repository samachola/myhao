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

Route::get('/register', 'AuthController@get');
Route::get('/projects', 'ProjectsController@get');
Route::post('/projects/add', 'ProjectsController@store')->middleware('auth');
Route::get('/projects/add', 'ProjectsController@create')->middleware('auth');
Route::get('/projects/myhao', 'ProjectsController@showHaos')->middleware('auth');
Route::get('/projects/myhao/{projectId}', 'ProjectsController@myhao')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
