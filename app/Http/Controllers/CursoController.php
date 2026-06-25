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
                'periodo' => 'required|string|max:50',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

                'periodo.required' => 'O campo período é obrigatório.',
                'periodo.max' => 'O campo período deve conter no máximo 50 caracteres.',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('curso.index')
                ->withErrors($validator)
                ->withInput();
        }

        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());
				
        $cursos = new \App\Models\CursoModel();
        return view('curso.index', ['success'=>'Cadastrado!', 'cursos'=>$cursos::all()]);
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