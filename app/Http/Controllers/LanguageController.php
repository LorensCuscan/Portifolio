<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchToEnglish(){
        return view ('index-en');
    }

    public function aboutInEnglish(){
        return view ('about-en');
    }

    // Adicione outras funções para outras páginas em inglês conforme necessário
}
