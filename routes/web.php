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
Route::any('/old', 'HomeController@index');

Route::get('/', 'HomeController@myHome');

Route::get('/users', 'HomeController@myUsers');

Auth::routes();
/*
No difference
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
   $this->post('login', 'Auth\LoginController@login');
   $this->post('logout', 'Auth\LoginController@logout')->name('logout');
     
  
   $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   $this->post('register', 'Auth\RegisterController@register');
 
   $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
   $this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/
Route::get('/home', 'HomeController@index')->name('home');
