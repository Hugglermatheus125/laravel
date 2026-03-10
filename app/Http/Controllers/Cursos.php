<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    function desenvolvimentoDeSistemas(){
        return view('curso-ds');
    }
    
    function administracao(){
        return view('curso-adm');
    }

    function meioAmbiente(){
        return view('curso-ma');
    }

    function mecatronica(){
        return view('curso-meca');
    }

}

?>