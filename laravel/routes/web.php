<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
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
})->name('home');

Route::post('/login', [UsuariosController::class, 'login'])->name('login');
Route::get('/login', [UsuariosController::class, 'login']);
Route::get('/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');

Route::prefix('/produtos')->middleware('auth')->group(function (){
Route::get('', [ProdutosController::class, 'index'])->name('produtos');
Route::post('', [ProdutosController::class, 'index']);
Route::get('/add', [ProdutosController::class, 'add'])->name('produtos.add');
Route::post('/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');
Route::get('/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');
Route::get('/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::post('/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');
Route::get('/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');
Route::delete('/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');
});



Route::prefix('/usuarios')->middleware('auth')->group(function (){
Route::get('', [UsuariosController::class, 'index'])->name('usuarios');
Route::post('', [UsuariosController::class, 'index']);
Route::get('/add', [UsuariosController::class, 'add'])->name('usuarios.add');
Route::post('/add', [UsuariosController::class, 'addSave'])->name('usuarios.addSave');
Route::get('/{usuario}', [UsuariosController::class, 'view'])->name('usuarios.view');
Route::get('/edit/{usuario}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::post('/edit/{usuario}', [UsuariosController::class, 'editSave'])->name('usuarios.editSave');
Route::get('/delete/{usuario}', [UsuariosController::class, 'delete'])->name('usuarios.delete');
Route::delete('/delete/{usuario}', [UsuariosController::class, 'deleteForReal'])->name('usuarios.deleteForReal');
});

