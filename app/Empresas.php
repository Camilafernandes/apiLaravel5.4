<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresas extends Model
{
 	use SoftDeletes;
	
	protected $fillable = ['nome_empresa'];
	
 	protected $dates = ['deleted_at'];
}
