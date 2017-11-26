<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;

class FuncionariosController extends Controller
{
	public function index(){
		$Funcionarios = Funcionarios::all();
		
		return response()->json($Funcionarios);
	}
	
	public function show($id){
		$Funcionarios= Funcionarios::with('empresas')->find($id);
		
		if(!$Funcionarios){
			return response()->json([
					'message' => 'Record not found',
			],404);
		}
		
		$nomeCompleto = $Funcionarios['nome'].$Funcionarios['sobrenome'];
		$empresa	  = $Funcionarios['empresas'][0]['nome_empresa'];
		
		return response()->json(['nomeCompleto' => $nomeCompleto, 'empresa' => $empresa]);
	}
	
	public function store(Request $request){
		$Funcionarios= new Funcionarios;
		$Funcionarios->fill($request->all());
		$Funcionarios->save();
		
		return response()->json($Funcionarios, 201);
	}
	
	public function update(Request $request, $id){
		$Funcionarios= Funcionarios::find($id);
		
		if(!$Funcionarios) {
			return response()->json([
					'message'   => 'Record not found',
			], 404);
		}
		
		$Funcionarios->fill($request->all());
		$Funcionarios->save();
		
		return response()->json($Funcionarios);
	}
	
	public function destroy($id){
		$Funcionarios= Funcionarios::find($id);
		
		if(!$Funcionarios) {
			return response()->json([
					'message'   => 'Record not found',
			], 404);
		}
		
		$Funcionarios->delete();
		
		return response()->json([
				'message'   => 'Registro deletado',
		], 200);
	}
}
