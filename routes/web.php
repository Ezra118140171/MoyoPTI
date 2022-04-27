<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PembukuanController;

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


Route::get('/menu', function () {
    return view('menu.index');
})->middleware(['auth'])->name('menu/index');

Route::get('/menu/create', function () {
    return view('menu.create');
})->middleware(['auth'])->name('menu/create');

Route::get('/menu/show', function () {
    return view('menu.show');
})->middleware(['auth'])->name('menu/show');

Route::get('/menu/edit', function () {
    return view('menu.edit');
})->middleware(['auth'])->name('menu/edit');

Route::get('/meja', function () {
    return view('meja.index');
})->middleware(['auth'])->name('meja');

Route::get('/meja/show', function () {
    return view('meja.show');
})->middleware(['auth'])->name('meja.show');


// Route::get('menus','MenuController@index');
Route::get('menu',[MenuController::class,'index'])->name('menu.index');
Route::post('menu/create',[MenuController::class,'store'])->name('menu');
// Route::post('menu/edit',[MenuController::class,''])->
require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('pembukuan', [PembukuanController::class,'index'])->name('pembukuan');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::get('menu',[MenuController::class,'index'])->name('menu.index');
});
