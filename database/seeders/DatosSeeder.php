<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos')->insert([
        	'id'=> '1',
        	'email' => 'stef',
        	'password' => ('itslp20'),
        	'nombre' => ('Stephanie Cordero'),
        ]);
    }
}
