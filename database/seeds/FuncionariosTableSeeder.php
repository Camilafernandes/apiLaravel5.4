<?php

use Illuminate\Database\Seeder;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('funcionarios')->insert([
    		'nome'  			=>  'Julio',
    		'sobrenome'  		=>  'Silva',
    		'idade'  			=>  25,
    		'data_nascimento' 	=> '2003-10-01',
    		'empresa_id' 		=> 1
    	]);
    }
}
