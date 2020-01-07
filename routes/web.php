<?php

use App\Presenter;
use Illuminate\Http\Request;

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

Route::get('/timetable', function () {
    return view('timetable');
});

Route::get('/pr-timetable', function () {
    return view('presentingtimetable');
});

Route::get('/searchable', function () {
    return view('search-results');
});


Route::resource('speakers', 'SpeakerController');
Route::resource('presenting-companies', 'PresenterController');

Route::get('search', 'AutoCompleteController@index');
Route::get('autocomplete', 'AutoCompleteController@search');

Route::get('search1', 'SpeakerSearchController@index');
Route::get('autocompleteSpeaker', 'SpeakerSearchController@searchSpeaker');