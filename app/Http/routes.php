<?php

Route::auth();

Route::get('/', 'appHomeController@index');