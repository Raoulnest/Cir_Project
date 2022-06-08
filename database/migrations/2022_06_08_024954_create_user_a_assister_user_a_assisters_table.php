<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAAssisterUserAAssistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_a_assister_user_a_assisters', function (Blueprint $table) {
            $table->id('user_a_assiter_id');
            $table->string('nom_user_a_assister');
            $table->string('service_user_assister');
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
        Schema::dropIfExists('user_a_assister_user_a_assisters');
    }
}
