<?php

use Illuminate\Support\Facades\Route;

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('dashboard.login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('dashboard.logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('dashboard.password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('dashboard.password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('dashboard.password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'HomeController@index');