<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('episode_id');
            $table->string('director');
            //$table->timestamps();
            $table->string('created')->nullable(); // may be converted to $table->dateTime
            $table->string('edited')->nullable(); // may be converted to $table->dateTime
            //planets accessible by many to many connection (table film_table)
            // another columns may be implemented the same way 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
