<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;

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

Route::get('/', [PagesController::class,'home']);
Route::get('/about', [PagesController::class,'about']);

Route::get('/students', [StudentsController::class,'index']);
Route::get('/students/create', [StudentsController::class,'create']);
Route::get('/students/{id}', [StudentsController::class,'show']);
Route::get('/students/{id}/edit', [StudentsController::class,'edit']);

Route::post('/students', [StudentsController::class,'store']);

Route::delete('/students/{id}', [StudentsController::class,'destroy']);

Route::patch('/students/{id}', [StudentsController::class,'update']);