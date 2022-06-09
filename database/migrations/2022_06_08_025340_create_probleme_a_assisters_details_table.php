<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemeAAssistersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probleme_a_assisters_details', function (Blueprint $table) {
            $table->id('probleme_a_assisters_details');
            $table->unsignedBigInteger('probleme_a_assisters_id')->index();
            $table->unsignedBigInteger('solution_id')->index();

            $table->foreign('probleme_a_assisters_id')->references('probleme_a_assisters_id')->on('probleme_a_assisters');
            $table->foreign('solution_id')->references('solution_id')->on('solution_solutions');
            $table->string('statut_details');

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
        Schema::dropIfExists('probleme_a_assisters_details');
    }
}
