<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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
Route::get('/', 'FrontController@getIndex'); 
// {
//     return view('index-rtl');
// });
Route::get( '/search','FrontController@search');
Route::view('registeration-form','registeration-form');

Route::post('registeration-form','FrontController@create');

Route::get("trainer-details/{id}", "FrontController@getTrainerDetails"); //for controller or submit page

