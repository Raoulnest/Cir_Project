<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_solutions', function (Blueprint $table) {
            $table->id('solution_id');
            $table->string('libelle_solution');
            $table->integer('solution_parent_id')->nullable();

            $table->unsignedBigInteger('probleme_id')->index();
            $table->unsignedBigInteger('type_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('responsable_id')->index();

            $table->foreign('probleme_id')->references('probleme_id')->on('probleme_problemes');  
            $table->foreign('type_id')->references('type_id')->on('type_types');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('responsable_id')->references('responsable_id')->on('responsable_responsables');
            $table->Integer('rang');
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
        Schema::dropIfExists('solution_solutions');
    }
}
