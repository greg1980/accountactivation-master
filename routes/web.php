<?php
use App\Registration;
use App\User;
use App\Role;
// Use App\Admin;
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


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/activate/{code}', 'ActivationController@activation')->name('user.activation');
Route::get('/resend/code', 'ActivationController@coderesend')->name('code.resend');
Route::get('/registrations', 'RegistrationsController@index');
Route::get('Aboutus','RegistrationsController@Aboutus');
Route::get('Contact', 'RegistrationsController@Contact');
Route::get('Council', 'RegistrationsController@Council');
Route::get('Committees', 'RegistrationsController@Committees');
Route::get('Events', 'RegistrationsController@Events');
Route::get('Membership', 'RegistrationsController@Membership'); 


Route::get('/profile', 'UserController@profile');
Route::Post('/profile', 'UserController@update_avatar');

Route::resource('/registration','RegistrationsController');
Route::post('/registrations', 'RegistrationsController@store');
Route::get('registration/edit/{id}', 'RegistrationsController@edit');



/*=======================================
=            Route for Admin            =
=======================================*/
Route::group(['middleware' => 'admin'], function() {
    // Route::get('admin','AdminController@admin');
Route::get('admin/users','AdminController@users');
Route::get('admin/create','AdminController@create');
Route::get('admin/edit/{id}','AdminController@edit');
Route::resource('/Admin','AdminController');
});


/*=====  End of Route for Admin  ======*/

