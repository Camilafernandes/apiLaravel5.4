<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresas;

class EmpresasController extends Controller
{
	public function index(){
		$Empresas = Empresas::all();
		
		return response()->json($Empresas);
	}
	
	public function show($id){
		$Empresas= Empresas::find($id);
		
		if(!$Empresas){
			return response()->json([
					'message' => 'Record not found',
			],404);
		}
		
		return response()->json($Empresas);
	}
	
	public function store(Request $request){
		$Empresas= new Empresas;
		$Empresas->fill($request->all());
		$Empresas->save();
		
		return response()->json($Empresas, 201);
	}
	
	public function update(Request $request, $id){
		$Empresas= Empresas::find($id);
		
		if(!$Empresas) {
			return response()->json([
					'message'   => 'Record not found',
			], 404);
		}
		
		$Empresas->fill($request->all());
		$Empresas->save();
		
		return response()->json($Empresas);
	}
	
	public function destroy($id){
		$Empresas= Empresas::find($id);
		
		if(!$Empresas) {
			return response()->json([
					'message'   => 'Record not found',
			], 404);
		}
		
		$Empresas->delete();
		
		return response()->json([
				'message'   => 'Registro deletado',
		], 200);
	}
}
