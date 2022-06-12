<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemeProblemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probleme_problemes', function (Blueprint $table) {
            $table->id('probleme_id');
            $table->string('libelle_probleme');
            $table->integer('probleme_parent_id')->nullable()->index();
            $table->unsignedBigInteger('type_id')->index();
            $table->unsignedBigInteger('user_id')->index();

            $table->foreign('type_id')->references('type_id')->on('type_types');
            $table->foreign('user_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('probleme_problemes');
    }
}
