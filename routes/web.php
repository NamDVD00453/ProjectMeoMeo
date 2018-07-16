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

//Route::get('/', function () {
//    return view('products.home');
//});
Route::get('/', 'ProductsController@index');
//Route::get('/manager', 'ProductsController@index');
//Route::get('/admin', function () {
//    return view('manager');
//});
Route::get('/admin', 'AdminController@index');
