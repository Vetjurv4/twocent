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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'Website@about')->name('about');
Route::get('/gallery', 'Website@gallery')->name('gallery');
Route::get('/contact', 'Website@contact')->name('contact');
Route::resource('program', 'Programmes');
Route::resource('program.projects', 'Projects')->shallow();
Route::resource('projectusers', 'ProjectUsers')->shallow();
