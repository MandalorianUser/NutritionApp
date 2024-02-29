<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Helpers\FrasesNutricion;
class HomeController extends Controller
{
    public function index()
    {
       
    $frases = new FrasesNutricion();
    $fraseAleatoria = $frases->obtenerFraseAleatoria();
        $datos = [
            'page' => 'Register',
            'fraseRandom' => $fraseAleatoria["frase"],
            'autorFrase' => $fraseAleatoria["autor"],
        ];
        
        return Inertia::render("HomePage", $datos);
    }

    public function login()
    {
        // Crear una instancia de la clase FrasesNutricion
        $frase =  new FrasesNutricion();
        $fraseAleatoria = $frase->obtenerFraseAleatoria();
        
        $datos = [
            'page' => 'Login',
            'fraseRandom' => $fraseAleatoria["frase"],
            'autorFrase' => $fraseAleatoria["autor"],
        ];
        
        return Inertia::render("HomePage", $datos);
    }
}
