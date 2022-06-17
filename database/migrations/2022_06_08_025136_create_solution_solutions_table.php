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
            $table->unsignedBigInteger('rang_id')->nullable();
            $table->unsignedBigInteger('solution_parent_id')->index()->nullable();
            $table->timestamps();
            

            $table->unsignedBigInteger('probleme_id')->index()->nullable();
            $table->unsignedBigInteger('type_id')->index()->nullable();
            $table->unsignedBigInteger('user_id')->index()->nullable();;
            $table->unsignedBigInteger('responsable_id')->index()->nullable();

            $table->foreign('solution_parent_id')->references('solution_id')->on('solution_solutions');
            $table->foreign('probleme_id')->references('probleme_id')->on('probleme_problemes');  
            $table->foreign('type_id')->references('type_id')->on('type_types');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('responsable_id')->references('responsable_id')->on('responsable_responsables');
           
            
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
