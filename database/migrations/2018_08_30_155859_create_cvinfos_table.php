<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvinfos', function (Blueprint $table) {
            $table->increments('cvid');
            $table->string('uid');
            $table->string('name');
            $table->string('email');
            $table->date('birthdate');
            $table->string('mobileNumber')->nullable($value = true);

            $table->string('carrierObjective',500);
            $table->string('fatherName')->nullable($value = true);
            $table->string('motherName')->nullable($value = true);
            $table->string('permanantAddress',300)->nullable($value = true);
            $table->string('presentAddress',300);

            $table->string('nationality');
            $table->string('maritialState');
            $table->string('religion');
            $table->string('bloodGroup')->nullable($value = true);

            $table->string('uDepartment');
            $table->string('uUniversity');
            $table->string('uPassingYear');
            $table->string('uCgpa');

            $table->string('pDepartment');
            $table->string('pUniversity');
            $table->string('pPassingYear');
            $table->string('pCgpa');

            $table->string('sDepartment');
            $table->string('sBoard');
            $table->string('sPassingYear');
            $table->string('sgpa');
            $table->string('sInstitute');

            $table->string('hDepartment');
            $table->string('hBoard');
            $table->string('hPassingYear');
            $table->string('hgpa');
            $table->string('hInstitute');
            $table->string('image')->nullable($value = true);
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
        Schema::dropIfExists('cvinfos');
    }
}
