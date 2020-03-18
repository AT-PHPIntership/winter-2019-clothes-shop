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

Route::get('/home', function () {
	return view('admin.home');
})->name('home');

Route::resource('bills', 'BillController');
Route::resource('billdetails', 'BillDetailController');
Route::resource('categories', 'CategoryController');
Route::resource('comments', 'CommentController');
Route::resource('images', 'ImageController');
Route::resource('products', 'ProductController');
Route::resource('users', 'UserController');
