<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');
