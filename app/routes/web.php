<?php

Route::get('/', function() {
	echo 'teste';
});

Route::group(['prefix'=>'users'], function() {
	Route::get('/', function() {
		echo "<a href='/users/tadeu'>tadeu</a>";
	});
	Route::get('/{user}', function() {
		echo "Tadeu' profile";
		echo "<br> <a href=/users>outros perfis</a>";
	});
});

Route::group(['prefix'=>'abc', 'controller'=>'AbcController'], function() {
	Route::get('123', 'getControl');
	Route::group(['prefix'=>'def'], function() {
		Route::get('456', 'getTest');
		Route::group(['prefix'=>'ghi', 'controller'=>'GHIController'], function() {
			Route::get('789', 'getHome');
		});
	});
});
