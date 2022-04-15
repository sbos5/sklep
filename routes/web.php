<?php
use App\Http\Controllers\ProduktController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/produkty',[ ProduktController::class,'index'])->name('produkty')->middleware(['auth']);
Route::get('/produkt/{id}',[ProduktController::class,'show'])->name('produkt');
Route::post('/store',[ProduktController::class,'store'])->name('store');
Route::post('/update/{id}',[ProduktController::class,'update'])->name('update');
Route::get('/delete/{id}',[ProduktController::class,'delete'])->name('delete');

Route::get('/client',[ClientController::class,'index'])->name('clients');//  ->middleware(['auth']);
Route::get('/client/{id}',[ClientController::class,'show'])->name('client');
Route::post('/c_store',[ClientController::class,'store'])->name('c_store');
Route::post('/c_update/{id}',[ClientController::class,'update'])->name('c_update');
Route::get('/c_delete/{id}',[ClientController::class,'delete'])->name('c_delete');

Route::get('/order',[OrderController::class,'index'])->name('order');//  ->middleware(['auth']);
Route::get('/order/{id}',[OrderController::class,'show'])->name('o_show');
Route::post('/o_store',[OrderController::class,'store'])->name('o_store');
Route::post('/o_update/{id}',[OrderController::class,'update'])->name('o_update');
Route::get('/o_delete/{id}',[OrderController::class,'delete'])->name('o_delete');