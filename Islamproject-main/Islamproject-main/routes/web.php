<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//root
Route::get('' , fn()=>redirect(route('home'))); 

//main page
Route::get('/home' ,[HomeController::class , 'index'])->name('home'); 
Route::get('store-user-review' , [HomeController::class , 'storeUserReview'])->name('home.storeUserReview'); 


//auth
Route::get('register' ,[AuthController::class , 'register'])->name('register'); 
Route::get('login' ,[AuthController::class , 'login'])->name('login'); 
Route::post('login-auth' ,[AuthController::class , 'loginAuth'])->name('login.auth'); 
Route::post('store-user' ,[AuthController::class , 'storeUser'])->name('storeUser'); 
Route::get('logout' ,[AuthController::class , 'logout'])->name('logout'); 

//products
Route::get('product/{id}' ,[ProductController::class , 'viewProduct'])->name('product'); 
Route::get('product/review/store-user-review' ,[ProductController::class , 'storeUserReview'])->name('product.storeProductReview'); 

//cart 
Route::get('cart', [CartController::class , 'viewCart'])->name('cart'); 
Route::get('add-to-cart', [CartController::class , 'addToCart'])->name('addToCart'); 
Route::get('remove-cart-item/{index}', [CartController::class , 'removeCartItem'])->name('cart.removeItem'); 




//FOR TESTING
Route::get('dd', function(){
    // return session()->all(); 
    session()->remove('cart'); 
}); 