<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('home');
    }) ->name("home");
Route::get('/catalog/{category}',[CatalogController::class,'show']) ->name("catalog");
Route::get('/product/{product}',[ProductController::class,'show']) ->name("product");
Route::post('/feedback',function (Request $request) {
    Mail::to('magiatrrav@mail.ru')->send(new Feedback($request->name,$request->email,$request->text));
    return view('home');
    })->name("feedback");
