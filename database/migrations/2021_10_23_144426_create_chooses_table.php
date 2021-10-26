<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chooses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->longText('description');
            $table->longText('description_2');
            $table->string('block_1_title');
            $table->string('block_1_image');
            $table->string('block_2_title');
            $table->string('block_2_image');
            $table->string('block_3_title');
            $table->string('block_3_image');
            $table->string('block_4_title');
            $table->string('block_4_image');
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
        Schema::dropIfExists('chooses');
    }
}
