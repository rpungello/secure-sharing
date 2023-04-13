<?php

use App\Http\Controllers\LogoutController;
use App\Http\Livewire\Home;
use App\Http\Livewire\SecretCreate;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', Home::class)->name('home')->middleware('auth');
Route::get('/logout', LogoutController::class)->name('logout')->middleware('auth');
Route::get('/secret/create', SecretCreate::class)->name('secret.create')->middleware('auth');
