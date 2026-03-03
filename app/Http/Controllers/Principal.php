<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return view('pagina-principal');
    }

    function sobre() {
        return view('sobre');
    }

    function contato() {
        return view('contato');
    }

    function desenvolvimentoDeSistemas() {
        return view('desenvolvimento-de-sistemas');
    }

    function administracao() {
        return view('administracao');
    }

    function meioAmbienta() {
        return view('meio-ambiente');
    }

    
}