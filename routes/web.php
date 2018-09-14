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
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/cv', function () {
    return view('cv');
});
Route::get('/demo', function () {
    return view('demo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userregistration', 'UserRegistrationController@index')->name('usrreg');
Route::POST('/submit', 'UserRegistrationController@submit')->name('submit');
Route::get('/createCV', 'cvController@index')->name('cv');
Route::get('/cvsubmit', 'cvController@submit')->name('cvsub');
Route::post('/userlogin', 'signinController@index');
Route::get('/signout', 'signinController@signout');
Route::get('/pdf','cvController@create_pdf');
Route::get('/pdfdemo','cvController@create_pdf');

?>
