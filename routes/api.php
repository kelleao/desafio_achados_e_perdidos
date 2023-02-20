<?php

use App\Http\Controllers\CadastrarLocalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/locais', [CadastrarLocalController::class, 'index'])->name('locais.index');
Route::post('/locais', [CadastrarLocalController::class, 'store'])->name('locais.store');
Route::put('/locais', [CadastrarLocalController::class, 'update'])->name('locais.update');
Route::delete('/locais', [CadastrarLocalController::class, 'delete'])->name('locais.delete');
