<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MessagesController;
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

Route::get('/', 'App\Http\Controllers\ProductController@home');

//Route::get('/products', function () {
//    return view('products');
//});

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/account', function () {
    return view('account');
})->name('account');


Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::post('add-to-cart', '\App\Http\Controllers\ProductController@addToCart');
Route::get('/cart', '\App\Http\Controllers\ProductController@viewCart');
Route::get('/remove-item/{rowId}', '\App\Http\Controllers\ProductController@removeItem');

Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::get('/admin_products', '\App\Http\Controllers\ProductController@addProduct')->middleware('auth');

Route::view('contact','contact-us');
Route::post('contact', [ContactUsController::class, 'sendMessage']);
Route::get('messages', [MessagesController::class, 'showMessages']);
