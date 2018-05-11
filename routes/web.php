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

// Route::get('/home', function () {
//     echo "this is home";
// });

Route::get('/home/{id}', 'Controller@home');
Route::get('/home/{id}', 'Controller@home')->name('homeid');
Route::any('/', 'HomeController@index');
Route::get('/login', 'Controller@login_view');
Route::post('/loginsend', 'Controller@login_check');