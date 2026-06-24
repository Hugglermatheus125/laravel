<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
        function index(){ 
        $professores = new \App\Models\ProfessorModel();
        return view('professor.index', ['professores'=>$professores::all()]);
    }

    function add(Request $dados) {
        $validator = Validator::make(
		      $dados->all(),
	            [
	                'nome' => 'required|min:3|max:255',
                    'email' => 'required|email|unique:professores,email',
                    'telefone' => 'required|digits:11',
	            ],
	            [
	                'nome.required' => 'O campo nome é obrigatório.',
	                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
	                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
	                'email.required' => 'O campo email é obrigatório.',
	                'email.email' => 'O campo email deve ser um endereço de email válido.',
	                'email.unique' => 'O campo email já está em uso.',
	                'telefone.required' => 'O campo telefone é obrigatório.',
	                'telefone.digits' => 'O campo telefone deve conter 11 dígitos.',
	            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }        
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());
        $professores = new \App\Models\ProfessorModel();
        return response()->json($professores->all(), 200);
    }

    function remove(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        $professores = new \App\Models\ProfessorModel();
        return view('professor.index', ['success'=>'Removido!', 'professores'=>$professores::all()]);
    }

    function atualizar(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

    function save(Request $dados) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        $professores = new \App\Models\ProfessorModel();
        return view('professor.index', ['success'=>'Atualizado!', 'professores'=>$professores::all()]);
    }
}
