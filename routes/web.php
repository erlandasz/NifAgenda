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
    return view('index');
});

Route::get('/speakers', function () {
    return view('speakers');
});

Route::get('/presenting-companies', function () {
    return view('presenters');
});

Route::get('/supporting-organisations', function () {
    return view('supporters');
});

Route::get('/organisers', function () {
    return view('organisers');
});

Route::resource('speakers', 'SpeakerController');
Route::resource('presenters', 'PresenterController');