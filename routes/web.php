<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {return view('home');}) ->name("home");
Route::get('/catalog', function () {return view('catalog', ['products' => Product::all()]);}) ->name("catalog");
Route::get('/product/{product}',[ProductController::class,'show']) ->name("product");
