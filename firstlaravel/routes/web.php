<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});







// Route untuk menampilkan halaman produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route untuk menampilkan form
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');

// Route untuk menangani pengiriman form
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
