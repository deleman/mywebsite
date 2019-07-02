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




/***
 * section just for testing
*/

// return navbar for text
Route::get('navbar', function(){
    return view('modules.navbar');
});

// return navbar for text
Route::get('menu', function(){
    return view('modules.menu');
});


/***
 * Routes for SignUp
 */
Route::get('signup', 'SignUpController@signup')->name('signup');
Route::post('signup', 'SignUpController@createNewPost');


/**
 * code generated with make:auth command
 *
 */


//captcha example
Route::get('my-captcha', 'CaptchaController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'CaptchaController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'CaptchaController@refreshCaptcha')->name('refresh_captcha');



//generated routes with artisan command
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();







