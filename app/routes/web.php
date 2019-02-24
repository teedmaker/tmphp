<?php

Route::get('/', function() {
    echo '<h1 align="center">Hello world!</h1> <br/>'.
         '<p align="center">May you can see <a href="users">all users</a></p>';
});

Route::group(['prefix'=>'users'], function() {
	Route::get('/', function() {
		echo "<h1>All users</h1> <a href='/users/tadeu'>tadeu</a>";
	});
	Route::get('/{user}', function() {
		echo "Tadeu' profile";
		echo "<br> <a href=/users>All users</a>";
	});
});

Route::group(['prefix'=>'abc', 'controller'=>'AbcController', 'permission'=>'admin'], function() {
	Route::get('{id}', function($id) {
		echo "Your id is: {$id}";
	});
	Route::group(['prefix'=>'def'], function() {
		Route::get('456', 'getTest');
		Route::group(['prefix'=>'ghi', 'controller'=>'GHIController'], function() {
			Route::get('789', 'getHome');
		});
	});
});
