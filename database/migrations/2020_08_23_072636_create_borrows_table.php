<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->bigIncrements('borrow_id');
            $table->unsignedBiginteger('borrow_book_id');
            $table->unsignedBiginteger('borrow_user_id');
            $table->unsignedBiginteger('borrow_student_id');
            $table->foreign('borrow_book_id')->references('book_id')->on('books');
            $table->foreign('borrow_user_id')->references('user_id')->on('users');
            $table->foreign('borrow_student_id')->references('student_id')->on('students');
            $table->biginteger('borrow_total_books');
            $table->date('borrow_date');
            $table->date('borrow_expectation_back_date');
            $table->date('borrow_back_date')->nullable();
            $table->string('borrow_fine')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
