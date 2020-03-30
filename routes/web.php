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

Route::view('/hello', 'hello');

Route::get('users/{age?}', function ($age = 0) {
    return '<h1>возраст: ' . $age . '</h1>';
})->where(['age' => '[0-9]+'])->name('users.age');

Route::get('users/{username?}', function ($username = '') {
    return '<h1>Имя: ' . $username . '</h1>';
})->where(['username' => '[A-Za-z]+'])->name('users.username');

Route::prefix('number')->group(function () {
    Route::get('one', function() {
        return 'One';
    });
    Route::get('two', function() {
        return 'Two';
    });
});

//Route::fallback(function () {
//    return 'Not Routes Found';
//});

Route::get('tasks/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');
