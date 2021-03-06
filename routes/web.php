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

Route::get('/', 'PhotoUploadController@index');
Route::post('uploadPhoto', 'PhotoUploadController@uploadPhoto');
Route::get('getData', 'PhotoUploadController@getData');
Route::get('deleteImage/{id}', 'PhotoUploadController@deleteImage');