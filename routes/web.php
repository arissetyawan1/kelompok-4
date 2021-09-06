<?php

use App\Http\Controllers\RoleController;
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

Route::get('/', [RoleController::class, 'index']);

Route::post('store-role', [RoleController::class, 'store'])->name('store.role');
Route::delete('bjjhas/{id}', [RoleController::class, 'delete'])->name('delete.role');

Route::view('index', 'index');
