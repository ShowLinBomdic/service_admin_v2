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
        Route::get('list/{page?}','AccountController@getList')->name('list');
        Route::get('new','AccountController@create_user')->name('new');
        Route::match(['post','get'],'update_service_type/{user_id?}','AccountController@update_service_type');
    });

Route::prefix('settings')
    ->name('settings.')
    ->middleware('auth','role:superadministrator|administrator')
    ->group(function(){
        Route::get('users/{page?}','Settings\UserController@index')->name('users.list');
        Route::get('users/create','Settings\UserController@index')->name('users.create');
        Route::get('users/{id}','Settings\UserController@form')->name('users.form');
        Route::post('users/update','Settings\UserController@update')->name('users.update');
        Route::post('users/store','Settings\UserController@store')->name('users.store');

        Route::get('permission','Settings\PermissionController@index')->name('permission.list');



        Route::get('roles','Settings\RolesController@index')->name('roles.list');


    });



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
