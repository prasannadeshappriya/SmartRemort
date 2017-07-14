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

Route::get('/',array(
    'as' => 'ShowServerView',
    'uses' => 'mainController@getIndexPage'
));

Route::get('/get_test',array(
    'as' => 'GetRequestTest',
    'uses' => 'mainController@getSampleRequest'
));

Route::post('/post_test',array(
    'as' => 'PostRequestTest',
    'uses' => 'mainController@postSampleRequest'
));
