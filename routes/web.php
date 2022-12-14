<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\productController;



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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post("/login",[Usercontroller::class,'login']);
Route::get("/",[productController::class,'index']);
Route::get("detail/{id}",[productController::class,'detail']);
Route::get("search",[productController::class,'search']);
Route::post("add_to_cart",[productController::class,'addToCart']);



