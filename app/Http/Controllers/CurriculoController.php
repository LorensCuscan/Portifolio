<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class CurriculoController extends Controller
{
    public function curriculo()
    {
        $filePath = public_path('images/curriculo/Curriculo.Lorens.pdf');
        $fileName = 'Curriculo.Lorens.pdf'; // Nome do arquivo com a extensão correta

        $headers = [
            'Content-Type' => 'application.pdf', // Forçar download
        ];
        
        return response()->download($filePath, $fileName, $headers);
    }
}