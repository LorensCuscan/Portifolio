<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PortifolioController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('welcome');
});


    Route::get('index', [IndexController::class, 'index'])->name('index');
    Route::get('about', [SobreController::class, 'about'])->name('about');
    Route::get('contato', [ContatoController::class, 'contato'])->name('contato');
    Route::get('portifolio', [PortifolioController::class, 'portifolio'])->name('portifolio');
    Route::get('download-curriculo', [CurriculoController::class, 'curriculo'])->name('curriculo');

