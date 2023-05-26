<?php

use App\Http\Controllers\PersonasController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\userController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('index.index');

//personas
Route::get('/clientes', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');


Route::get('/Productos', [productosController::class, 'index'])->name('productos.index');
Route::get('/createPro', [productosController::class, 'create'])->name('productos.create');
Route::post('/storePro', [productosController::class, 'store'])->name('productos.store');
Route::get('/editPro/{id}', [productosController::class, 'edit'])->name('productos.edit');
Route::put('/updatePro/{id}', [productosController::class, 'update'])->name('productos.update');
Route::get('/showPro/{id}', [productosController::class, 'show'])->name('productos.show');
Route::delete('/destroyPro/{id}', [productosController::class, 'destroy'])->name('productos.destroy');


Route::get('/user', [userController::class, 'index'])->name('user.index');
Route::get('/createUser', [userController::class, 'create'])->name('user.create');
Route::post('/storeUser', [userController::class, 'store'])->name('user.store');
Route::get('/editUser/{id}', [userController::class, 'edit'])->name('user.edit');
Route::put('/updateUser/{id}', [userController::class, 'update'])->name('user.update');
Route::get('/showUser/{id}', [userController::class, 'show'])->name('user.show');
Route::delete('/destroyUser/{id}', [userController::class, 'destroy'])->name('user.destroy');





