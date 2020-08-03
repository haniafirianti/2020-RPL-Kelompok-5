<?php

use Illuminate\Database\Seeder;

class publishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'publisher_name' 	=> 'Gramedia',
            'publisher_address' => 'Jl. Mo. Hatta',
        ]);

        DB::table('publishers')->insert([
            'publisher_name' 	=> 'Airlangga',
            'publisher_address' => 'Jl. Soekarno Hatta',
        ]);

        DB::table('publishers')->insert([
            'publisher_name' 	=> 'Lugina',
            'publisher_address' => 'Jl. Gedung Sate',
        ]);

        DB::table('publishers')->insert([
            'publisher_name' 	=> 'DAMN!',
            'publisher_address' => 'Jl. Palasari',
        ]);

        DB::table('publishers')->insert([
            'publisher_name' 	=> 'Loveable',
            'publisher_address' => 'Jl. Permatasari',
        ]);


    }
}
