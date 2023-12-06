<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(){
        return view ('/en-us/index');
       
    }

    public function about(){
        return view ('/en-us/about');
       
    }


}
