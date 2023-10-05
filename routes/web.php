<?php

use App\Http\Controllers\PengaduanController;
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

Route::get('/', [PengaduanController::class, 'index'])->name('index');
Route::post('/', [PengaduanController::class, 'create'])->name('create-pengduan');

Route::post('/register', [PengaduanController::class, 'create'])->name('create-pengduan');
