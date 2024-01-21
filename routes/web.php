<?php

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




    



