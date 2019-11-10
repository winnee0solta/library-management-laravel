<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('book_id');
            $table->integer('category_id')->default(0);
            $table->string('book_image');
            $table->string('book_name');
            $table->string('book_author');
            $table->longText('book_desc');
            $table->string('book_shelves_no');
            $table->integer('book_count');
            $table->integer('book_reserved')->default(0);
            $table->integer('book_taken')->default(0);
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
        Schema::dropIfExists('books');
    }
}
