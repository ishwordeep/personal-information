<?php

use App\Http\Controllers\InformationController;
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
    return redirect('/information');
})->name('home');

Route::get('/information',[InformationController::class,'index'])->name('index.information');
Route::get('information/create',[InformationController::class,'create'])->name('create.information');
Route::get('/information/{id}',[InformationController::class,'show'])->name('show.information');
Route::post('information/store',[InformationController::class,'store'])->name('store.information');
Route::delete('information/delete{id}',[InformationController::class,'destroy'])->name('delete.information');
