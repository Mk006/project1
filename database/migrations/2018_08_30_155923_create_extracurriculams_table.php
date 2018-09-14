<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtracurriculamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracurriculams', function (Blueprint $table) {
            $table->increments('ecid');
            $table->string('uid');
            $table->string('extraCurriculam1',500);
            $table->string('extraCurriculam2',500);
            $table->string('extraCurriculam3',500);
            $table->string('extraCurriculam4',500);
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
        Schema::dropIfExists('extracurriculams');
    }
}
