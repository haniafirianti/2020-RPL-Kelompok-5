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
            'user_email' 	    => 'admin@gmail.com',
            'user_full_name'    => 'admin',
            'user_password'     => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'user_email' 	    => 'rendy@gmail.com',
            'user_full_name'    => 'rendy',
            'user_password'     => Hash::make('rendy'),
        ]);
    }
}
