<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->to('home');
});


Route::prefix('account')
    ->name('account.')
    ->middleware('auth', 'role:superadministrator|administrator|user')
    ->group(function(){
        Route::get('list/{page?}','AccountController@index')->name('list');
        Route::get('/{user_id}','AccountController@user_detail')->name('detail');
        Route::get('create','AccountController@form')->name('create');
        Route::get('edit/{user_id}','AccountController@form')->name('edit');
        Route::post('store','AccountController@store')->name('store');
        //Route::match(['post','get'],'update_service_type/{user_id?}','AccountController@update_service_type');
    });

Route::prefix('client')
    ->name('client.')
    ->middleware('auth', 'role:superadministrator|administrator|user')
    ->group(function(){
        Route::get('list/{page?}','ClientController@index')->name('list');
        Route::get('/{client_id}','ClientController@client_detail')->name('detail');
        Route::get('create','ClientController@form')->name('create');
        Route::get('edit/{client_id}','ClientController@form')->name('edit');
        Route::post('store','ClientController@store')->name('store');
        Route::match(['post','get'],'deviceImport/{client_id?}','ClientController@deviceImport')->name('deviceImport');
        Route::match(['post','get'],'report/usage','ClientController@report_usage')->name('report.usage');
        Route::match(['post','get'],'report/device','ClientController@report_device')->name('report.device');
        Route::match(['post','get'],'report/subscribe','ClientController@report_subscribe')->name('report.subscribe');
    });
















Route::prefix('settings')
    ->name('settings.')
    ->middleware('auth','role:superadministrator|administrator')
    ->group(function(){


        Route::get('users/{page?}','Settings\UserController@index')->where('page', '[0-9]+')->name('users.list');
        Route::get('users/create','Settings\UserController@form')->name('users.create');
        Route::get('users/update/{id?}','Settings\UserController@form')->where('id', '[0-9]+')->name('users.update');

        //Route::post('users/update','Settings\UserController@update')->name('users.update');
        Route::post('users/store','Settings\UserController@store')->name('users.store');

        Route::get('permission','Settings\PermissionController@index')->name('permission.list');



        Route::get('roles','Settings\RolesController@index')->name('roles.list');


    });



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
