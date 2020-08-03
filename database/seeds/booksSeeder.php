<?php

use Illuminate\Database\Seeder;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_title' 	        => 'Matematika',
            'book_publisher_id' 	=> 1,
            'book_page_total' 	    => 173,
            'book_total' 	        => 30,
            'book_category'         => 'Pelajaran',
        ]);

        DB::table('books')->insert([
            'book_title' 	        => 'B.Indonesia',
            'book_publisher_id' 	=> 2,
            'book_page_total' 	    => 200,
            'book_total' 	        => 35,
            'book_category'         => 'Pelajaran',
        ]);

        DB::table('books')->insert([
            'book_title' 	        => 'Rakyatku',
            'book_publisher_id'     => 3,
            'book_page_total' 	    => 150,
            'book_total' 	        => 25,
            'book_category'         => 'Cerita Rakyat',
        ]);

        DB::table('books')->insert([
            'book_title' 	        => 'Aku dan dia',
            'book_publisher_id' 	=> 4,
            'book_page_total' 	    => 160,
            'book_total' 	        => 28,
            'book_category'         => 'Novel',
        ]);

        DB::table('books')->insert([
            'book_title'            => 'PKN',
            'book_publisher_id'     => 5,
            'book_page_total'       => 280,
            'book_total'            => 60,
            'book_category'         => 'Pelajaran',
        ]);


    }
}
