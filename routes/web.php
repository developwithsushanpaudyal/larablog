<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/blogs', 'BlogsController@index');
