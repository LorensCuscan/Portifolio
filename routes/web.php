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

Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/about', [SobreController::class, 'about'])->name('about');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('/portifolio', [PortifolioController::class, 'portifolio'])->name('portifolio');
Route::get('/download-curriculo', [CurriculoController::class, 'curriculo'])->name('curriculo');


Route::controller(LanguageController::class)->group(function () {
    Route::get('/en-us', [LanguageController::class, 'switchToEnglish'])->name('switch-to-english');
    Route::get('/en-us/about', [LanguageController::class, 'aboutInEnglish'])->name('about-in-english');;

   
   
});


