<?php

//  Auth
Route::auth();

//  Home and menu
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::post('menu', ['as' => 'menu', 'uses' => 'HomeController@menu']);

//  Pages
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/graduation', ['as' => 'graduation', 'uses' => 'HomeController@graduation']);
Route::get('/recommendation', ['as' => 'recommendation', 'uses' => 'HomeController@recommendation']);
Route::get('/technology', ['as' => 'technology', 'uses' => 'HomeController@technology']);
Route::get('/github', ['as' => 'github', 'uses' => 'HomeController@github']);

//  Projects
Route::get('/projects', ['as' => 'project.index', 'uses' => 'ProjectController@index']);
Route::get('/projects/{projectId}', ['as' => 'project.show', 'uses' => 'ProjectController@show']);