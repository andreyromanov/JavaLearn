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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/student/themes', 'StudThemeController@index')->name('studtheme');
Route::get('/student/theme/{studTheme}', 'StudThemeController@show');

Route::get('/student/text', function(){
    return view('student/text');
});

Route::get('/teacher/themes', 'TeachThemeController@index')->name('professortheme');
Route::get('/teacher/themes/newtheme',function(){
    return view('teacher/themeredactor', ['cresta0'=>0]);
});
Route::post('/teacher/themes/newtheme/create','TeachThemeController@store');

