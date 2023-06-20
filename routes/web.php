<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard12;
use App\Http\Controllers\pesanan12;
use App\Http\Controllers\kategori12;
use App\Http\Controllers\produk12;



Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[dashboard12::class, 'index'])->name('dashboard');
    Route::get('/produk', [produk12::class, 'index'])->name('produk');
    Route::get('/produkCreate', [produk12::class, 'create'])->name('produkCreate');
    Route::get('/pesananCreate', [pesanan12::class, 'create'])->name('pesananCreate');
    Route::get('/kategoriCreate', [kategori12::class, 'create'])->name('kategoriCreate');
    Route::post('/produkUpdate', [produk12::class, 'update'])->name('produkUpdate');
    Route::post('/pesananUpdate', [pesanan12::class, 'update'])->name('pesananUpdate');
    Route::post('/kategoriUpdate', [kategori12::class, 'update'])->name('kategoriUpdate');
    Route::get('/produkEdit/{id}', [produk12::class, 'edit'])->name('produkedit');
    Route::get('/pesananEdit/{id}', [pesanan12::class, 'edit'])->name('pesananedit');
    Route::get('/kategoriEdit/{id}', [kategori12::class, 'edit'])->name('kategoriedit');
    Route::get('/produkDelete/{id}', [produk12::class, 'destroy'])->name('produkDelete');
    Route::get('/pesananDelete/{id}', [pesanan12::class, 'destroy'])->name('pesananDelete');
    Route::get('/kategoriDelete/{id}', [kategori12::class, 'destroy'])->name('kategoriDelete');
    Route::post('/produkStore', [produk12::class, 'store'])->name('produkStore');
    Route::post('/pesananStore', [pesanan12::class, 'store'])->name('pesananStore');
    Route::post('/kategoriStore', [kategori12::class, 'store'])->name('pesananStore');
    Route::get('/pesanan', [pesanan12::class, 'index'])->name('pesanan');
    Route::get('/kategori', [kategori12::class, 'index'])->name('kategori');
});
});

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
