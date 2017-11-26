<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('empresas')->insert([
    		'nome_empresa'  =>  'Sony',
    	]);
    }
}
