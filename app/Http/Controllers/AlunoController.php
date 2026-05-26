<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }
    function add(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());
    }
}
