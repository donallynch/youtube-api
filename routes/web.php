<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/**
 * Routes
 */
Route::get('/index', 'IndexController@indexAction')
    ->name('index');

Route::post('/index', 'IndexController@postAction')
    ->name('post');
