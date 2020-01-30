<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/**
 * Routes
 */
Route::get('/', 'IndexController@indexAction')
    ->name('home');
Route::get('/index', 'IndexController@indexAction')
    ->name('index');

Route::post('/index', 'IndexController@postAction')
    ->name('post');
