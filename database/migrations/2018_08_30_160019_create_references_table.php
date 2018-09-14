<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('rid');
            $table->string('uid');
            $table->string('name');
            $table->string('designation');
            $table->string('institute');
            $table->string('phone');
            $table->string('email');
            $table->string('name1');
            $table->string('designation1');
            $table->string('institute1');
            $table->string('phone1');
            $table->string('email1');
            $table->timestamps();
            $table->foreign('uid')->references('uid')->on('registrations')->onDelete('cascade');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('references');
    }
}
