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

Route::get('/search', [
    'uses' =>'HomeController@search',
    'as' => 'search'
]);
Route::get('/statistic', 'HomeController@getStatistic');
Route::get('/view-statistic', 'HomeController@viewStatistic');
Route::get('/', 'HomeController@index');

