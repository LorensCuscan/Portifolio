<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchToEnglish(){
        return view ('/en-us/index');
    }

    public function aboutInEnglish(){
        return view ('/en-us/about');
    }

    // Adicione outras funções para outras páginas em inglês conforme necessário
}
