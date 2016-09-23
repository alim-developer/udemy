<?php

Route::get('/', 'RouteController@home');
Route::get('/courses', 'RouteController@courses');
Route::get('/Web-Development', 'RouteController@categories');
Route::get('/Web-Developer-Bootcamp', 'RouteController@course');
Route::get('/shopping-card', 'RouteController@shopping');
Route::get('/my-courses', 'RouteController@my_courses');
Route::get('/edit-profile', 'RouteController@edit_profile');
Route::get('/account-settings', 'RouteController@account_settings');
