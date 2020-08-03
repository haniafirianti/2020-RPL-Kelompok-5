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
            'book_title' 	=> 'Matematika',
            'publisher_id' 	=> 1,
            'page_total' 	=> 173,
            'book_total' 	=> 30,
            'book_category' => 'Pelajaran',
        ]);

        DB::table('books')->insert([
            'book_title' 	=> 'B.Indonesia',
            'publisher_id' 	=> 2,
            'page_total' 	=> 200,
            'book_total' 	=> 35,
            'book_category' => 'Pelajaran',
        ]);

        DB::table('books')->insert([
            'book_title' 	=> 'Rakyatku',
            'publisher_id' 	=> 3,
            'page_total' 	=> 150,
            'book_total' 	=> 25,
            'book_category' => 'Cerita Rakyat',
        ]);

        DB::table('books')->insert([
            'book_title' 	=> 'Aku dan dia',
            'publisher_id' 	=> 4,
            'page_total' 	=> 160,
            'book_total' 	=> 28,
            'book_category' => 'Novel',
        ]);

        DB::table('books')->insert([
            'book_title' 	=> 'PKN',
            'publisher_id' 	=> 5,
            'page_total' 	=> 280,
            'book_total' 	=> 60,
            'book_category' => 'Pelajaran',
        ]);


    }
}
