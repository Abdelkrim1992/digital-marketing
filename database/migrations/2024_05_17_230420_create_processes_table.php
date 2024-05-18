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
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('title',1000)->nullable();
            $table->string('big_title',1000)->nullable();
            $table->string('main_text',1000)->nullable();
            $table->string('first_title',1000)->nullable();
            $table->string('first_text',1000)->nullable();
            $table->string('second_title',1000)->nullable();
            $table->string('second_text',1000)->nullable();
            $table->string('thirty_title',1000)->nullable();
            $table->string('thirty_text',1000)->nullable();
            $table->string('forty_title',1000)->nullable();
            $table->string('forty_text',1000)->nullable();
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
        Schema::dropIfExists('processes');
    }
};
