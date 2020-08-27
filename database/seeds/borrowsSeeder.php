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

            'borrow_book_id' 		            => '1',
            'borrow_user_id' 		            => '1',
            'borrow_student_id'                 => '1',
            'borrow_total_books'                => '25',
            'borrow_date' 	                    => '2020-08-04',
            'borrow_expectation_back_date' 	    => '2020-08-11',
            ]);

        DB::table('borrows')->insert([

            'borrow_book_id' 		            => '5',
            'borrow_user_id' 		            => '2',
            'borrow_student_id'                 => '1',
            'borrow_total_books'                => '28',
            'borrow_date' 	                    => '2020-08-04',
            'borrow_expectation_back_date' 	    => '2020-08-11',
            ]);

        DB::table('borrows')->insert([

            'borrow_book_id' 		            => '4',
            'borrow_user_id' 		            => '1',
            'borrow_student_id'                 => '1',
            'borrow_total_books'                => '30',
            'borrow_date' 	                    => '2020-08-04',
            'borrow_expectation_back_date' 	    => '2020-08-11',
            'borrow_fine' 			            => '2000',
            ]);

        DB::table('borrows')->insert([

            'borrow_book_id' 		            => '3',
            'borrow_user_id' 		            => '2',
            'borrow_student_id'                 => '1',
            'borrow_total_books'                => '35',
            'borrow_date' 	                    => '2020-08-04',
            'borrow_expectation_back_date' 	    => '2020-08-11',
            ]);

        DB::table('borrows')->insert([

            'borrow_book_id' 		            => '2',
            'borrow_user_id' 		            => '2',
            'borrow_student_id'                 => '1',
            'borrow_total_books'                => '40',
            'borrow_date' 	                    => '2020-08-04',
            'borrow_expectation_back_date' 	    => '2020-08-11',
            'borrow_fine' 			            => '5000',
            ]);


    }
}
