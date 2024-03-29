<?php

use App\Http\Controllers\ModelsController;
use Illuminate\Database\Eloquent\Model;
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

Route::get('/', [ModelsController::class, 'index'])->name('index');



Route::get('/create', [ModelsController::class, 'create'])->name('create');
Route::post('/store', [ModelsController::class, 'store'])->name('store');
Route::post('/edit', [ModelsController::class, 'edit'])->name('edit');
