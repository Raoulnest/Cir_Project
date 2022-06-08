<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemeAAssistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probleme_a_assisters', function (Blueprint $table) {
            $table->id('probleme_a_assisters_id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('user_a_assiter_id')->unique();
            $table->unsignedBigInteger('probleme_id')->unique();
            $table->string('statut');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');  
            $table->foreign('user_a_assiter_id')->references('user_a_assiter_id')->on('user_a_assister_user_a_assisters');
            $table->foreign('probleme_id')->references('probleme_id')->on('probleme_problemes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('probleme_a_assisters');
    }
}
