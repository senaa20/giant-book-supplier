<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/detail', function () {
//     return view('detail');
// });

Route::get('/detail/{book}', [AppController::class, 'detail']);
// untuk nangkep id yang dipassing di index

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [AppController::class, 'contact']);
// kalo pake cara ini, harus ditambah di AppController


Route::get('/publisher', [AppController::class, 'publisher']);

Route::get('/detail-publisher/{id}', [AppController::class, 'publisherdetail']);

Route::get('/index', [AppController::class, 'index']);

Route::get('category/{category}', [AppController::class, 'category']);