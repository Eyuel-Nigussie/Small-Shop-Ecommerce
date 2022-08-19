<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
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

Route::get('login', function () {  
    return view('login');
});
Route::get('logout',function(){
    Session::forget('user');
    return redirect('/');
});
Route::post('/login',[UserController::class,'login']); //login button press sidereg endiqebel
Route::view('/register','register'); 
Route::post('/signup',[UserController::class,'signup']); //signup button press sidereg endiqebel


Route::get('/',[ProductController::class,'index']); //home page
Route::get('/detail/{id}',[ProductController::class,'detail']); //details page with id passed
Route::post('addToCart',[ProductController::class,'addToCart']); //add to cart
Route::get('cartlist',[ProductController::class,'cartList']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);  // Remove item from cart
Route::get('ordernow',[ProductController::class,'ordernow']);
