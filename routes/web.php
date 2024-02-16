<?php
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;
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

Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'hola'])->name('curso.show');
Route::get('/primo/{numero}', [TallerController::class, 'esPrimo'])->name('curso.esPrimo');
