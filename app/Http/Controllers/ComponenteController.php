<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComponenteController extends Controller
{
    function index(){ 
        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['componentes'=>$componentes::all()]);
    }

    function add(Request $dados) {
        $validator = Validator::make(
		      $dados->all(),
	            [
	                'nome' => 'required|min:3|max:255',
                    'hora_inicio' => 'required|date_format:H:i',
                    'hora_fim' => 'required|date_format:H:i|after:hora_inicio'
	            ],
	            [
	                'nome.required' => 'O campo nome é obrigatório.',
	                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
	                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
	                'hora_inicio.required' => 'O campo hora de início é obrigatório.',
	                'hora_inicio.date_format' => 'O campo hora de início deve estar no formato HORAS:MINUTOS.',
	                'hora_fim.required' => 'O campo hora de fim é obrigatório.',
	                'hora_fim.date_format' => 'O campo hora de fim deve estar no formato HORAS:MINUTOS.',
	                'hora_fim.after' => 'O campo hora de fim deve ser posterior ao campo hora de início.',
	            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }        
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());
        $componentes = new \App\Models\ComponenteModel();
        return response()->json($componentes->all(), 200);
    }

    function remove(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente::destroy($id);

        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Removido!', 'componentes'=>$componentes::all()]);
    }

    function atualizar(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($id);

        return view('componente.atualizar', ['componente'=>$componente]);
    }

    function save(Request $dados) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Atualizado!', 'componentes'=>$componentes::all()]);
    }
}
