<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PortifolioController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\LanguageController;

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

Route::get('pt-br/index', [IndexController::class, 'index'])->name('index');
Route::get('pt-br/about', [SobreController::class, 'about'])->name('about');
Route::get('pt-br/contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('pt-br/portifolio', [PortifolioController::class, 'portifolio'])->name('portifolio');
Route::get('pt-br/download-curriculo', [CurriculoController::class, 'curriculo'])->name('curriculo');


Route::prefix('en-us')->group(function () {
    Route::get('/', function () {
        return redirect('/en-us/index');
    })->name('switch-to-english');

    Route::get('/index', [IndexController::class, 'index'])->name('index-en');
    Route::get('/about', [SobreController::class, 'aboutInEnglish'])->name('about-en');
    // Adicione mais rotas em inglês conforme necessário
});


