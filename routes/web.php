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


Route::get('/auth/register', 'auth\authController@register');
Route::get('/auth/login', 'auth\authController@login');
Route::get('/auth/forgot_password', 'auth\authController@forgot_password');

Route::get('/admin/dashboard', 'admin\dashboardController@dashboard');

Route::get('/admin/category', 'admin\categoryController@index');
Route::post('/admin/category_add', 'admin\categoryController@store');
Route::put('/admin/category_edit/{category}', 'admin\categoryController@update');
Route::get('/admin/category_delete', 'admin\categoryController@destroy');

Route::get('/admin/product', 'admin\productController@index');
Route::get('/admin/product_add', 'admin\productController@create');
Route::post('/admin/product_add', 'admin\productController@store');
Route::get('/admin/product_edit/{product}', 'admin\productController@edit');
Route::put('/admin/product_edit/{product}', 'admin\productController@update');
Route::get('/admin/product_detail/{product}', 'admin\productController@show');
Route::get('/admin/product_delete', 'admin\productController@destroy');

Route::get('/admin/city', 'admin\cityController@index');
Route::post('/admin/city_add', 'admin\cityController@store');
Route::put('/admin/city_edit/{city}', 'admin\cityController@update');
Route::get('/admin/city_delete', 'admin\cityController@destroy');

Route::get('/admin/province', 'admin\provinceController@index');
Route::post('/admin/province_add', 'admin\provinceController@store');
Route::put('/admin/province_edit/{province}', 'admin\provinceController@update');
Route::get('/admin/province_delete', 'admin\provinceController@destroy');
