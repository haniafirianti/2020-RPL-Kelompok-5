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
            
            'borrow_book_id' 		=> '1',
            'borrow_user_id' 		=> '1',
            'borrow_date' 	=> '2020-08-04',
            'borrow_back_date' 	=> '2020-08-04',
            'borrow_fine' 			=> '',
        ]);

        DB::table('borrows')->insert([
            
            'borrow_book_id' 		=> '5',
            'borrow_user_id' 		=> '2',
            'borrow_date' 	=> '2020-08-04',
            'borrow_back_date' 	=> '2020-08-04',
            'borrow_fine' 			=> '',
        ]);

        DB::table('borrows')->insert([
            
            'borrow_book_id' 		=> '4',
            'borrow_user_id' 		=> '3',
            'borrow_date' 	=> '2020-08-04',
            'borrow_back_date' 	=> '2020-08-04',
            'borrow_fine' 			=> '2000',
        ]);

        DB::table('borrows')->insert([
            
            'borrow_book_id' 		=> '3',
            'borrow_user_id' 		=> '4',
            'borrow_date' 	=> '2020-08-04',
            'borrow_back_date' 	=> '2020-08-04',
            'borrow_fine' 			=> '',
        ]);

        DB::table('borrows')->insert([
            
            'borrow_book_id' 		=> '2',
            'borrow_user_id' 		=> '5',
            'borrow_date' 	=> '2020-08-04',
            'borrow_back_date' 	=> '2020-08-04',
            'borrow_fine' 			=> '5000',
        ]);


    }
}
