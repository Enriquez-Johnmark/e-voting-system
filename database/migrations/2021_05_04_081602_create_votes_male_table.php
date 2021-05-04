<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesMaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes_male', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('voter_id');
            $table->unsignedBigInteger('male_id');
            $table->timestamps();

            $table->index('voter_id');
            $table->index('male_id');
            $table->foreign('male_id')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes_male');
    }
}
