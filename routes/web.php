<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
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
    return view('login');
});

Route::post('login' ,[LoginController::class,'login']);


Route::prefix('companies')->group(function () {
    Route::get('/', [CompanyController::class, 'index']); // Listagem dos registros existentes
    Route::get('/create',[CompanyController::class,'create']); // Criar novos registros
    Route::post('/store',[CompanyController::class,'store']); // Criar registro no banco
    Route::post('/update',[CompanyController::class,'update']); // Atualizar registro no banco
    Route::get('/edit/{id}',[CompanyController::class,'edit']); // Editar registro no banco
    Route::get('/delete/{id}',[CompanyController::class,'delete']); // Deletar registro no banco
});


