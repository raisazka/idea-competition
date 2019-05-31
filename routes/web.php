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

Route::get('/user-login','WelcomeController@login')->name('index.login');
Route::post('/contactus','ViewController@SendMessage')->name('contactus');
//Route::get('/login','WelcomeController@login');

Route::get('/dashboard','HomeController@index')->name('user.dashboard');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::post('/logins','Auth\LoginController@authenticate')->name('user.logins');
Route::post('/member-regis', 'Auth\RegisterController@registerUser')->name('user.register');
Route::patch('/update-member/{id}', 'HomeController@updateMemberData')->name('member.update');
Route::get('/proposal', 'ProposalController@index')->name('proposal.index');
Route::get('/downlaod-proposal', 'ProposalController@download')->name('proposal.download');
Route::post('/upload-proposal', 'ProposalController@upload')->name('proposal.upload');
Route::get('/payments', 'PaymentController@index')->name('payment.index');
Route::post('/payments', 'PaymentController@upload')->name('payment.upload');
Route::get('/edit-group', 'GroupController@index')->name('group.index');
Route::patch('/edit-group', 'GroupController@update')->name('group.update');

Route::prefix('god')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/view-member', 'AdminController@viewMember')->name('admin.member');
    //Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('login', 'Auth\AdminAuthController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminAuthController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\AdminAuthController@logout')->name('admin.auth.logout');
    Route::patch('verify-payment/{id}', 'AdminController@verifyPayment')->name('admin.verify');
  });
  
