<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Funcionarios extends Model
{
	use SoftDeletes;
	
	protected $fillable = ['nome', 'sobrenome', 'idade', 'data_nascimento', 'empresa_id'];
	
	protected $dates = ['deleted_at'];
	
	
	function empresas() {
		return $this->hasMany(Empresas::class,'id','empresa_id');
	}
	
}
