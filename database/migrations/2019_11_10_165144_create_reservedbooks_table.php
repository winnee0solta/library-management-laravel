<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservedbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservedbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('book_id');
            $table->integer('user_id');
            $table->string('status')->default('Not Returned');
            $table->date('return_date');
            $table->string('returned_date')->default("no");
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
        Schema::dropIfExists('reservedbooks');
    }
}
