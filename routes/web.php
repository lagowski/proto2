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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get( '/{catchall?}', 'Proto2Controller@index');
Route::get( '/', 'Proto2Controller@index');
Route::get( '/aboutus', 'Proto2Controller@aboutus');
Route::get( '/formpanel', 'Proto2Controller@formpanel');
Route::get( '/profile', 'Proto2Controller@profile');

Route::get( '/forms/finance/accounts', 'Proto2Controller@finance_accounts');
Route::get( '/forms/finance/surveys', 'Proto2Controller@finance_surveys');
Route::get( '/forms/health/accounts', 'Proto2Controller@health_accounts');
Route::get( '/forms/search/accounts', 'Proto2Controller@search_accounts');
Route::get( '/forms/social/accounts', 'Proto2Controller@social_accounts');

Route::get( '/forms/earnings', 'Proto2Controller@earnings');


