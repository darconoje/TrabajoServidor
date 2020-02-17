<?php

Route::get('/', 'HomeController@index')->name('home');

//usuarios

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');

//juegos

Route::get('/juegos', 'GameController@index')
    ->name('games.index');

Route::get('/juegos/{game}', 'GameController@show')
    ->where('game', '[0-9]+')
    ->name('games.show');

Route::get('/juegos/nuevo', 'GameController@create')->name('games.create');

Route::post('/juegos', 'GameController@store');

Route::get('/juegos/{game}/editar', 'GameController@edit')->name('games.edit');

Route::put('/juegos/{game}', 'GameController@update');

Route::delete('/juegos/{game}', 'GameController@destroy')->name('games.destroy');

//empresas

Route::get('/empresas', 'CompanyController@index')
    ->name('companies.index');

Route::get('/empresas/{company}', 'CompanyController@show')
    ->where('company', '[0-9]+')
    ->name('companies.show');

Route::get('/empresas/nuevo', 'CompanyController@create')->name('companies.create');

Route::post('/empresas', 'CompanyController@store');

Route::get('/empresas/{company}/editar', 'CompanyController@edit')->name('companies.edit');

Route::put('/empresas/{company}', 'CompanyController@update');

Route::delete('/empresas/{company}', 'CompanyController@destroy')->name('companies.destroy');
Auth::routes();


