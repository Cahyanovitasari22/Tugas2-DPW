<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpage;
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

Route::get('/ ', function(){
    return view('welcome');   
});

Route::get('/product', function(){
    return view('product');
});

Route::get('/details-product', function(){
    return view('details-product');
});

Route::get('/login', function(){
    return view('login');
});



