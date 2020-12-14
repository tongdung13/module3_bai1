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
    return view('welcome');
});

Route::get('/product', function (){
    return view('product');
});

Route::post('/product', function (\Illuminate\Http\Request $request) {
     $product = $request->input('product');
     $price   = $request->input('list');
     $discount = $request->input('discount');
     $discountAmount = $price * $discount * 0.01;
     $amountAfterDiscount = $price - $discountAmount;

     return view('show', compact('product', 'price','discount', 'discountAmount', 'amountAfterDiscount'));
});
