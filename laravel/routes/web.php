<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Email;
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

Route::get('/usuarios/add', [UsuariosController::class, 'add'])->name('usuarios.add');
Route::post('/usuarios/add', [UsuariosController::class, 'addSave'])->name('usuarios.addSave');
Route::post('/login', [UsuariosController::class, 'login'])->name('login');
Route::get('/login', [UsuariosController::class, 'login']);
Route::get('/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');

Route::get('/email/verify', function(){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::prefix('/produtos')->group(function (){
Route::get('', [ProdutosController::class, 'index'])->name('produtos')->middleware('auth');
Route::post('', [ProdutosController::class, 'index']);

Route::get('/{produto}', [ProdutosController::class, 'view'])->name('produtos.view')->middleware('auth');
Route::get('/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit')->middleware('auth');
Route::post('/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave')->middleware('auth');
Route::get('/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete')->middleware('auth');
Route::delete('/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal')->middleware('auth');
});



Route::prefix('/usuarios')->middleware('auth')->group(function (){
Route::get('', [UsuariosController::class, 'index'])->name('usuarios');
Route::post('', [UsuariosController::class, 'index']);
Route::get('/{usuario}', [UsuariosController::class, 'view'])->name('usuarios.view');
Route::get('/edit/{usuario}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::post('/edit/{usuario}', [UsuariosController::class, 'editSave'])->name('usuarios.editSave');
Route::get('/delete/{usuario}', [UsuariosController::class, 'delete'])->name('usuarios.delete');
Route::delete('/delete/{usuario}', [UsuariosController::class, 'deleteForReal'])->name('usuarios.deleteForReal');
});

Route::prefix('/uploads')->middleware('auth')->group(function (){
    Route::get('', [UsuariosController::class, 'index'])->name('uploads');
    Route::post('', [UsuariosController::class, 'save'])->name('save');
    });
