<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartaMagicController;
use App\Models\CartaMagic;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/carta_magics', [CartaMagicController::class, 'index'])->name('carta_magics.index');
Route::get('/carta_magics/create', [CartaMagicController::class, 'create'])->name('carta_magics.create');
Route::post('/carta_magics', [CartaMagicController::class, 'store'])->name('carta_magics.store');
Route::get('/carta_magics/{carta_magic}/edit', [CartaMagicController::class, 'edit'])->name('carta_magics.edit');
