<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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

Route::get('/', function () {

    $product = Product::where('status', 'approved')->paginate(3);

    return view('landingpage.layouts', compact('product'));
});


Route::get('/users', [UserController::class, 'show']);
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class,'authenticate']);
Route::delete('/hapus-user/{id}', [UserController::class, 'delete']);
Route::get('/user-edit/{id}', [UserController::class, 'edit']);
Route::put('/user-update/{id}', [UserController::class, 'update']);

Route::post('/register', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'destroy']);

Route::post('/pesan', [PesanController::class, 'store']);
Route::delete('/hapus-pesan/{id}', [PesanController::class, 'destroy'])->middleware('auth', 'role:admin');
Route::put('/reply-mail', [PesanController::class, 'balasPesan']);
Route::get('/replied', [PesanController::class, 'replied']);

Route::get('/balas-pesan/{id}', [PesanController::class, 'show']);

Route::get('/dahsboard', [DashboardController::class, 'index']);

Route::get('/messages', [PesanController::class, 'index'])->middleware('auth', 'role:admin');


Route::get('/add-product', [ProductController::class, 'index'] );
Route::post('/add', [ProductController::class, 'store']);
Route::get('/wait-list', [ProductController::class, 'waitlist']);
Route::get('/approve-products', [ProductController::class, 'approve']);
Route::get('/approve-produk/{id}', [ProductController::class, 'show']);
Route::put('/update-product/{id}', [ProductController::class, 'update']);
Route::get('/active-product', [ProductController::class , 'active']);
Route::delete('/delete-produk/{id}', [ProductController::class, 'destroy']);
