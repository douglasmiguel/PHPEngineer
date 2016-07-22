<?php

//  Auth
Route::auth();

//  Home and menu
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::post('menu', ['as' => 'menu', 'uses' => 'HomeController@menu']);
