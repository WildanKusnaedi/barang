<?php

use App\Http\Controllers\LoginController;
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
    return view('login');
});

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/dashboard', function(){
    return view('dashboard');

});

Route::get('/master_user', function(){
    return view('master_user');
});

Route::get('/user/tambah', function(){
    return view('tambah');
});
Route::post('/users', [LoginController::class,'store'])->name('users.store');