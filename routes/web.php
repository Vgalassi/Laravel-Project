<?php
use App\http\Controllers\ProfessorController;
use App\http\Controllers\AlunosController;
use Illuminate\Support\Facades\Route;

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
    return view('trueindex');
});

Route::resource('alunos',AlunosController::class);

Route::resource('professores',ProfessorController::class);

//xd