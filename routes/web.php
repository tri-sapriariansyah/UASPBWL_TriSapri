<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/menu', 
[App\Http\Controllers\MenuController::class, 'index']);

Route::get('/menu/create', 
[App\Http\Controllers\MenuController::class, 'create']);
Route::post('/menu', 
[App\Http\Controllers\MenuController::class, 'store']);
Route::get('/menu/{id}/edit', 
[App\Http\Controllers\MenuController::class, 'edit']);
Route::patch('/menu/{id}', 
[App\Http\Controllers\MenuController::class, 'update']);


require __DIR__.'/auth.php';
