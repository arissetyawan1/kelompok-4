<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;


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
    return view('home');
});


Route::get('dashboard', [DataController::class, 'index'])->name('dashboard');

Route::view('login-form', 'login')->name('login-form');
Route::view('index-html', 'index')->name('index');
require __DIR__.'/auth.php';

