<?php

use App\Http\Controllers\IphoneController;
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

Route::get('/', [IphoneController::class, 'index']);
Route::post('/create', [IphoneController::class, 'create'])->name('create');
Route::get('/read', [IphoneController::class, 'read'])->name('read');
Route::post('/update', [IphoneController::class, 'update'])->name('update');
Route::delete('/delete', [IphoneController::class, 'delete'])->name('delete');
Route::get('/edit', [IphoneController::class, 'edit'])->name('edit');