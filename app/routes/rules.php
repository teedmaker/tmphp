<?php

Route::rule('user', '([0-9a-zA-Z_\-\.])');
Route::rule('post', '([0-9]{4,})\-([a-zA-Z0-9_\-\.])');
Route::rule('id',   '([0-9]{2,})');
