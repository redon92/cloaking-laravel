<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

Route::match(['get','post'],'/', 'HomeController@index');
Route::post('/insert','HomeController@insert');




Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){

    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');
    Route::post('/admin/updateCloak','CloakController@updateCloak');
    Route::get('/admin/registered','SubscriberController@viewSubscribers');
    Route::get('/admin/visitors','VisitorsController@viewVisitors');

});



Route::get('/logout', 'AdminController@logout');

