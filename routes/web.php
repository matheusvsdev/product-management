<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLogout;
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

// Login Routes
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware(CheckLogout::class);
Route::post('/login_submit', [AuthController::class, 'login_submit'])->name('login_submit')->middleware(CheckLogout::class);

// Main Page
Route::get('/', [MainController::class, 'index'])->name('index')->middleware(CheckLogin::class);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(CheckLogin::class);

// Products
Route::get('/new_product', [ProductController::class, 'new_product'])->name('new_product')->middleware(CheckLogin::class);
Route::post('/new_product_submit', [ProductController::class, 'new_product_submit'])->name('new_product_submit')->middleware(CheckLogin::class);
