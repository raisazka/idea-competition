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

Route::get('/', 'WelcomeController@index');
Route::get('/regis','WelcomeController@register');
Route::get('/logins','WelcomeController@login');
Route::get('/dashboard','WelcomeController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logins','Auth\LoginController@authenticate')->name('user.logins');
Route::post('/member-regis', 'Auth\RegisterController@registerUser')->name('user.register');
Route::patch('/update-member/{id}', 'HomeController@updateMemberData')->name('member.update');
Route::get('/proposal', 'ProposalController@index')->name('proposal.index');
Route::get('/downlaod-proposal', 'ProposalController@download')->name('proposal.download');
Route::post('/upload-proposal', 'ProposalController@upload')->name('proposal.upload');
Route::get('/payment', 'PaymentController@index')->name('payment.index');
Route::post('/payment', 'PaymentController@upload')->name('payment.upload');
Route::get('/edit-group', 'GroupController@index')->name('group.index');
Route::patch('/edit-group', 'GroupController@update')->name('group.update');
