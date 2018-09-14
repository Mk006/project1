<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('sid');
            $table->string('uid');
            $table->string('skill1',500);
            $table->string('skill2',500);
            $table->string('skill3',500);
            $table->string('skill4',500);
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
        Schema::dropIfExists('skills');
    }
}
