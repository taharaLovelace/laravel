<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;

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

Route::get('/alunos/login', [AlunosController::class, 'login'])->name('alunos.login');
Route::post('/alunos/logar', [AlunosController::class, 'logar'])->name('alunos.logar');
Route::post('/alunos/logout', [AlunosController::class, 'logout'])->name('alunos.logout');
Route::get('/alunos/dashboard', [AlunosController::class, 'dashboard'])->name('alunos.dashboard')->middleware('auth');