<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//show login page
Route::get('login','PagesController@showLogin');
//handle user login
Route::post('login','PagesController@handleLogin');
//show choose gender page
Route::get('choose','PagesController@showChoosePage');
//show sign up page
Route::get('sign-up','PagesController@showSignUP');
//show otp page
Route::post('otp','PagesController@showVerifyPage');
//verify otp
Route::post('verify','PagesController@verifyCode');

//show main page
Route::get('main','PagesController@showMainPage');