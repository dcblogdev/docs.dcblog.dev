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

Route::view('/', 'index');
Route::view('laravel-microsoft-graph', 'msgraph');
Route::view('laravel-dropbox', 'dropbox');
Route::view('laravel-box', 'box');
Route::view('laravel-eventbrite', 'eventbrite');
Route::view('pdo-wrapper', 'pdoWrapper');


