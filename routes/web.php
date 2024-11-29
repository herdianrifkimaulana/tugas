<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/' ,[HomeController::class,'index'])->name('home');
Route::get('/about' ,[AboutController::class,'about'])->name('about');
// Route to display the contact form
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');

Route::get('/menu' ,[MenuController::class,'menu'])->name('menu');

//auth
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// log out
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Routes untuk kategori

Route::get('categories/create', [KategoriController::class, 'create'])->name('categories.create');
Route::post('categories', [KategoriController::class, 'store'])->name('categories.store');

// Routes untuk users
Route::get('users', [DataController::class, 'index'])->name('users.index');
Route::get('users/create', [DataController::class, 'create'])->name('users.create');
Route::post('users', [DataController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit', [DataController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [DataController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [DataController::class, 'destroy'])->name('users.destroy');


// cart


Route::prefix('cart')->name('cart.')->group(function () {
    // Menampilkan halaman keranjang
    Route::get('/', [CartController::class, 'index'])->name('index');

    // Menambahkan item ke keranjang
    Route::post('/add', [CartController::class, 'add'])->name('add');

    // Menghapus item dari keranjang
    Route::delete('/remove/{id}', [CartController::class, 'remove'])->name('remove');

    // Halaman checkout
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
});
