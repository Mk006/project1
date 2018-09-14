<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->increments('aid');
            $table->string('uid');
            $table->string('achievement1',500);
            $table->string('achievement2',500);
            $table->string('achievement3',500);
            $table->string('achievement4',500);
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
        Schema::dropIfExists('achievements');
    }
}
