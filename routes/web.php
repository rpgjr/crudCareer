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

Route::get('/', 'CareerController@index');
Route::get('/upload', 'CareerController@index2');
Route::get('/', 'CareerController@showCareers');
Route::post('/save', 'CareerController@save')->name('save.career');
Route::post('/store','CareerController@store')->name('upload.file');
Route::patch('/update/{id}', ['as' => 'career.update', 'uses' => 'CareerController@update']);
Route::delete('/delete/{id}', ['as' => 'career.delete', 'uses' => 'CareerController@delete']);
