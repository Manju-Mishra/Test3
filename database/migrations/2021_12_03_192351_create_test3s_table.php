<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test3s', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
             $table->string('Last_name');
             $table->string('Email')->unique();
             $table->bigInteger('Mobile_num')->unique();
             $table->string('city');
             $table->string('gender');
             $table->integer('age');
             $table->string('image');
             $table->string('status');
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
        Schema::dropIfExists('test3s');
    }
}
