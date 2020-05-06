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

//VIEWS
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/hoewerkthet', function () {
    return view('hoewerkthet');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/personalpage', function () {
    return view('personalpage');
});

//ROUTES
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout','SessionsController@destroy');

Route::get('/questionnaires/create','QuestionnaireController@create');
Route::post('/questionnaires/create','QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');

Route::get('/questionnaires/{questionnaire}/questions/create','QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions/create','QuestionController@store');

Route::get('/surveys/{questionnaire}-{slug}','SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}','SurveyController@store');