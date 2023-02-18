<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlubController;
use App\Http\Controllers\KlasemenController;
use App\Http\Controllers\SkorController;
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
    return view('pages.homepage',[
        "title"=>"FOOTBALL APP"
    ]);
});

Route::get('/input-klub', [KlubController::class, 'index'])->name('tim');
Route::post('/input-klub/add', [KlubController::class, 'add'])->name('add_tim');
Route::post('/input-klub/update/{id}', [KlubController::class, 'update'])->name('update_tim');
Route::delete('/input-klub/delete/{id}', [KlubController::class, 'delete'])->name('delete_tim');

Route::get('/input-skor', [SkorController::class, 'index'])->name('skor');
Route::post('/input-skor/add', [SkorController::class, 'add'])->name('add_skor');
// Route::post('/input-skor/update/{id}', [KlubController::class, 'update'])->name('update_tim');
// Route::delete('/input-skor/delete/{id}', [KlubController::class, 'delete'])->name('delete_tim');

Route::get('/klasemen',[KlasemenController::class, 'index'])->name('klasemen');
