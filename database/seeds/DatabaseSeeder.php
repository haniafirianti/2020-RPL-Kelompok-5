<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(booksSeeder::class);
		$this->call(borrowsSeeder::class);
		$this->call(publishersSeeder::class);
		$this->call(usersSeeder::class);
        $this->call(studentsSeeder::class);
    }
}
