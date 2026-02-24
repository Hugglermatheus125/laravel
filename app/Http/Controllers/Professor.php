<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function login(){
        echo 'Página De Login';
    }
    
    function logout(){
        echo 'Página De Logout';
    }
    
    function alunos(){
        echo 'Listar os alunos que o professor leciona e suas notas';
    }
    
    function recuperarSenha(){
        echo 'Recuperar senha';
    }
    
    function recuperarRA(){
        echo 'Recuperar RA';
    }
    
    
}