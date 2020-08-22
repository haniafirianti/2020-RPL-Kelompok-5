<?php

use Illuminate\Database\Seeder;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('students')->insert([
    		
    		'student_nis' 			=> '181910',
    		'student_full_name' 	=> 'admin',
    		'student_class' 		=> 'XII RPL',
    		'student_phone_number'  => '081337466222',
    		'student_address' 		=> 'Kp.Sukamukti',
    		]);

    	DB::table('students')->insert([
    		'student_nis' 			=> '191810065',
    		'student_full_name' 	=> 'jhrendy',
    		'student_class' 		=> 'XII RPL1',
    		'student_phone_number'  => '6281337366222',
    		'student_address' 		=> 'Kp.Bojong Tanjung',
    		]);

    	DB::table('students')->insert([
    		'student_nis' 			=> '181910044',
    		'student_full_name' 	=> 'hania',
    		'student_class' 		=> 'XII RPL1',
    		'student_phone_number'  => '6281337266222',
    		'student_address' 		=> 'Kp.Cupu',
    		]);

    	DB::table('students')->insert([
    		'student_nis' 			=> '181910022',
    		'student_full_name'     => 'desmarita',
    		'student_class' 		=> 'XII RPL1',
    		'student_phone_number'  => '082237466222',
    		'student_address' 		=> 'Kp.Cembul',
    		]);

    	DB::table('students')->insert([
    		'student_nis' 			=> '181910070',
    		'student_full_name' 	=> 'roby',
    		'student_class' 		=> 'XII RPL1',
    		'student_phone_number'  => '081337326222',
    		'student_address' 		=> 'Kp.Patrol',
    		]);

    	
    	DB::table('students')->insert([
    		'student_nis' 			=> '181910021',
    		'student_full_name' 	=> 'christian',
    		'student_class' 		=> 'XII RPL1',
    		'student_phone_number'  => '081338726222',
    		'student_address' 		=> 'Kp.Landean',
    		]);    
    }
}
