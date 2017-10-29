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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('cshopadmin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLogin')->name('admin_login');
	Route::post('/login', 'Auth\AdminLoginController@processLogin')->name('admin_login.login');
	Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin_logout');
	Route::get('/store/add-product', 'ProductsController@showAdminAddPage')->name('admin_add_product');	
	Route::post('/store/add-product', 'ProductsController@addProduct')->name('admin_add_product.add');
	Route::post('/store/add-product/upload', 'ProductsController@addTempImages')->name('admin_add_product.upload_temp');
	Route::get('/store/categories', 'ProductsController@showAdminAddPage')->name('admin_categories');	
	Route::post('/store/categories/add-main', 'CategoriesController@addMainCategory')->name('admin_categories.add_main');	
	Route::post('/store/categories/add-sub', 'CategoriesController@addSubCategory')->name('admin_categories.add_sub');	
	Route::get('/store', 'StoreController@showStoreRecords')->name('admin_store_home');
	Route::get('/', 'AdminController@index')->name('admin_home');
});


// Route::get('/cshopadmin/login', function () {
//     return view('cshopadmin.login');
// });