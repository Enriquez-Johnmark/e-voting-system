<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->string('firstname');
            $table->string('lastname');
            $table->string('grade_section');
            $table->date('date_of_birth')->nullable();
            $table->string('zodiac_sign');
            $table->string('height');
            $table->string('weight');
            $table->string('blood_type');
            $table->string('motto');
            $table->string('image');
            $table->string('category')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
