<?php

use App\Http\Controllers\ProdutosController;
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

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');
Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');
Route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');
