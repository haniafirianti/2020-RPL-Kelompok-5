<?php

use Illuminate\Database\Seeder;

class borrowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borrows')->insert([
            
            'book_id' 		=> '1',
            'user_id' 		=> '1',
            'borrow_date' 	=> '2020-08-04',
            'back_date' 	=> '2020-08-04',
            'fine' 			=> '',
        ]);

        DB::table('borrows')->insert([
            
            'book_id' 		=> '5',
            'user_id' 		=> '2',
            'borrow_date' 	=> '2020-08-04',
            'back_date' 	=> '2020-08-04',
            'fine' 			=> '',
        ]);

        DB::table('borrows')->insert([
            
            'book_id' 		=> '4',
            'user_id' 		=> '3',
            'borrow_date' 	=> '2020-08-04',
            'back_date' 	=> '2020-08-04',
            'fine' 			=> '2000',
        ]);

        DB::table('borrows')->insert([
            
            'book_id' 		=> '3',
            'user_id' 		=> '4',
            'borrow_date' 	=> '2020-08-04',
            'back_date' 	=> '2020-08-04',
            'fine' 			=> '',
        ]);

        DB::table('borrows')->insert([
            
            'book_id' 		=> '2',
            'user_id' 		=> '5',
            'borrow_date' 	=> '2020-08-04',
            'back_date' 	=> '2020-08-04',
            'fine' 			=> '5000',
        ]);


    }
}
