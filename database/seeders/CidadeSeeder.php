<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert([
            'nome' => 'Santo André', 
            'latitude' => 5.8645,
            'longitude' => -140.4746,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('cidades')->insert([
            'nome' => 'Mauá', 
            'latitude' => 13.0665,
            'longitude' => 51.4323,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('cidades')->insert([
            'nome' => 'Maringá', 
            'latitude' => -77.8509,
            'longitude' => -22.5908,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
