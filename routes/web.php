<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlubController;
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


Route::get('/input-skor', function () {
    return view('pages.input-skor',[
        "title"=>"FOOTBALL APP - DATA SKOR"
    ]);
});
Route::get('/klasemen', function () {
    return view('pages.klasemen',[
        "title"=>"FOOTBALL APP - KLASEMEN"
    ]);
});
