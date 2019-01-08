<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDwellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dwellings', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->decimal('rent');
            $table->decimal('mortgage');
            $table->decimal('insurance');
            $table->decimal('electricity');
            $table->decimal('propaneGas');
            $table->decimal('phone');
            $table->decimal('drinkingWater');
            $table->decimal('maintainance');
            $table->decimal('cableTV');
            $table->decimal('internet');
            $table->decimal('projects');
            $table->decimal('other');
            $table->decimal('total');

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
        Schema::dropIfExists('dwellings');
    }
}
