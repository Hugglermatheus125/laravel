<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    function index(){ 
        $cursos = new \App\Models\CursoModel();
        return view('curso.index', ['cursos'=>$cursos::all()]);
    }

    function add(Request $dados) {
        $validator = Validator::make(
		      $dados->all(),
	            [
	                'nome' => 'required|min:3|max:255',
                    'periodo' => 'required|date_format:Y-m-d',
	            ],
	            [
	                'nome.required' => 'O campo nome é obrigatório.',
	                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
	                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
	                'periodo.required' => 'O campo período é obrigatório.',
	                'periodo.date_format' => 'O campo período deve estar no formato ANO-MÊS-DIA.',
	            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }        
        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());
        $cursos = new \App\Models\CursoModel();
        return response()->json($cursos->all(), 200);
    }

    function remove(string $id) {
        $curso = new \App\Models\CursoModel();
        $curso::destroy($id);

        $cursos = new \App\Models\CursoModel();
        return view('curso.index', ['success'=>'Removido!', 'cursos'=>$cursos::all()]);
    }

    function atualizar(string $id) {
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($id);

        return view('curso.atualizar', ['curso'=>$curso]);
    }

    function save(Request $dados) {
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($dados->id);
        $curso->update($dados->all());

        $cursos = new \App\Models\CursoModel();
        return view('curso.index', ['success'=>'Atualizado!', 'cursos'=>$cursos::all()]);
    }
}
