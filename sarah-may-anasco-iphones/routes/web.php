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

Route::controller(IphoneController::class)->group(function () {

	Route::view('/', 'index');

	Route::prefix('iphone')->group(function () {

		Route::post('/create', 'create');
		Route::get('/read', 'read');
		Route::post('/update', 'update');
		Route::delete('/delete/{id}', 'delete');
		Route::get('/edit/{id}', 'edit');
		Route::get('/search/{keyword}', 'search');
		Route::get('/view/{id}', 'view');

		Route::PermanentRedirect('','/');
	});

});

Route::get('storage/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
}); 

 