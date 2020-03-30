<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello, World';
});

Route::get('users/{age?}', function ($age = 0) {
    return '<h1>возраст: ' . $age . '</h1>';
})->where(['age' => '[0-9]+']);

Route::get('users/{username?}', function ($username = '') {
    return '<h1>Имя: ' . $username . '</h1>';
})->where(['username' => '[A-Za-z]+']);
