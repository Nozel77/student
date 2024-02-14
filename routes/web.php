<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
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






Route::get('/', [StudentsController::class, 'home']);
Route::get('home', [StudentsController::class, 'home']);
Route::get('about', [StudentsController::class, 'about']);


Route::group(["prefix" => "/student"], function(){
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::put('/update/{student}', [StudentsController::class, 'update']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
});

Route::group(["prefix" => "/kelas"], function(){
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail{student}', [KelasController::class, 'show']);
    Route::get('/create', [KelasController::class, 'create']);
    Route::post('/add', [KelasController::class, 'store']);
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
    Route::put('/update/{kelas}', [KelasController::class, 'update']);
    Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
});

Route::group(["prefix" => "/auth"], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::get('/dashboard', function(){
    return view('dashboard.layouts.main');
})->middleware('auth');




    



