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
Route::get('/all', 'ProductsController@showAll');
//Route::get('/manager', 'ProductsController@index');
//Route::get('/admin', function () {
//    return view('manager');
//});
Route::get('/admin', 'AdminController@index');
Route::get('/admin/listproducts', 'AdminController@allProduct');
Route::get('/admin/listcategories', 'AdminController@allCategory');

Route::get('/admin/addProduct', 'ProductsController@create');
Route::get('/product/{productId}', 'ProductsController@item');
Route::post('product/insert','ProductsController@insert');
Route::get('admin/product/delete/{productId}', 'ProductsController@delete');
Route::get('add/{productId}', 'OrderController@addToCart');



Route::get('/category/{categoryId}', 'CategoriesController@index');
Route::post('category/insert','CategoriesController@insert');
Route::get('admin/category/delete/{categoryId}', 'CategoriesController@delete');


Route::get('/cart', 'OrderController@showCart');
Route::post('/cart', 'OrderController@addOrder');



Route::get('/test', function () {
    return view('layouts.template');
});