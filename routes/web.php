<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\DashboardController;

/* End of file Controllername.php */
;
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

Route::get('/', function () {
    return redirect()->to(route('market'));
});
// Route
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
});
Route::view('market', 'market')->name('market');
Route::view('spekproduk', 'spekproduk')->name('spekproduk');
//BarangRoute
Route::middleware('auth')->get('dashboard', [BarangController::class, 'index'])->name('dashboard');
Route::view('insert-barang', 'formInsertBarang')->name('insert-barang');

// Barang CRUD
Route::post('insert-barang', [BarangController::class, 'store'])->name('barang.insert');
Route::delete('delete-barang/{id}',[BarangController::class, 'destroy'])->name('delete.barang');
Route::get('edit-barang/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('update-barang/{id}', [BarangController::class, 'update'])->name('barang.update');



//PembelianRoute
Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian');
Route::view('insert-pembelian', 'formInsertPembelian')->name('insert-pembelian');

// CRUD
Route::post('insert-pembelian', [PembelianController::class, 'store'])->name('pembelian.insert');
Route::delete('delete-pembelian/{id}', [PembelianController::class, 'destroy'])->name('pembelian.delete');
require __DIR__.'/auth.php';

