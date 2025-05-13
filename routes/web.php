<?php

use App\Http\Controllers\Main;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        echo 'Conexão efetuada com sucesso no Banco MYSQL: ' .DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die('Não foi possível conectar com a base de dados. Erro:' .$e->getMessage());
    }
});
*/

Route::get('/', [ProductController::class, 'index'])->name('index');

// Login Routes
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login_submit', [UserController::class, 'login_submit'])->name('login_submit');

// Main Page
Route::get('/main', [Main::class, 'main'])->name('main');
