<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' 		    => 'admin@gmail.com',
            'password' 	        => Hash::make('admin'),
            'user_nis' 			=> '181910',
            'user_full_name' 		=> 'admin',
            'user_class' 		=> 'XII RPL',
            'user_phone_number' => '081337466222',
            'user_address' 		=> 'Kp.Sukamukti',
            'user_level' 		=> '0',
        ]);

        DB::table('users')->insert([
            'email' 		    => 'rendy@gmail.com',
            'password' 	        => Hash::make('rendy'),
            'user_nis' 			=> '191810065',
            'user_full_name' 		=> 'jhrendy',
            'user_class' 		=> 'XII RPL1',
            'user_phone_number' => '6281337366222',
            'user_address' 		=> 'Kp.Bojong Tanjung',
            'user_level' 		=> '1',
        ]);

        DB::table('users')->insert([
            'email' 		    => 'hania@gmail.com',
            'password' 	        => Hash::make('hania'),
            'user_nis' 			=> '181910044',
            'user_full_name' 		=> 'hania',
            'user_class' 		=> 'XII RPL1',
            'user_phone_number' => '6281337266222',
            'user_address' 		=> 'Kp.Cupu',
            'user_level' 		=> '1',
        ]);

        DB::table('users')->insert([
            'email' 		    => 'desmarita@gmail.com',
            'password'      	=> Hash::make('desmarita'),
            'user_nis' 			=> '181910022',
            'user_full_name' 		=> 'desmarita',
            'user_class' 		=> 'XII RPL1',
            'user_phone_number' => '082237466222',
            'user_address' 		=> 'Kp.Cembul',
            'user_level' 		=> '1',
        ]);

        DB::table('users')->insert([
            'email' 		    => 'roby@gmail.com',
            'password' 	        => Hash::make('roby'),
            'user_nis' 			=> '181910070',
            'user_full_name' 		=> 'roby',
            'user_class' 		=> 'XII RPL1',
            'user_phone_number' => '081337326222',
            'user_address' 		=> 'Kp.Patrol',
            'user_level' 		=> '1',
        ]);

		
        DB::table('users')->insert([
            'email' 		    => 'christian@gmail.com',
            'password'      	=> Hash::make('christian'),
            'user_nis' 			=> '181910021',
            'user_full_name' 		=> 'christian',
            'user_class' 		=> 'XII RPL1',
            'user_phone_number' => '081338726222',
            'user_address' 		=> 'Kp.Landean',
            'user_level' 		=> '1',
        ]);        
    }
}
