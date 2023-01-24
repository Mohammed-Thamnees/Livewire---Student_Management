<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Tables\ClassesTable;
use Illuminate\Support\Facades\Auth;
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


//Authentication Routes
Auth::routes();
Route::redirect('/','/loginform');
Route::redirect('/login','/loginform');
Route::get('/loginform', [App\Http\Controllers\HomeController::class, 'login'])->name('login.form');
Route::post('/loginform/submit', [App\Http\Controllers\HomeController::class, 'loginsubmit'])->name('login.form.submit');
Route::get('/userlogout', [App\Http\Controllers\HomeController::class, 'logout'])->name('user.logout');

//Admin Routes
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('class/index', [HomeController::class, 'class_index'])->name('class.index');
    
});