<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->unsignedInteger('id_dwellings');
            $table->foreign('id_dwellings')->references('id')->on('dwellings');

            $table->unsignedInteger('id_transport_or_cars');
            $table->foreign('id_transport_or_cars')->references('id')->on('transport_or_cars');

            $table->unsignedInteger('id_foods');
            $table->foreign('id_foods')->references('id')->on('foods');

            $table->unsignedInteger('id_savings');
            $table->foreign('id_savings')->references('id')->on('savings');

            $table->unsignedInteger('id_debts');
            $table->foreign('id_debts')->references('id')->on('debts');

            $table->unsignedInteger('id_entertainments');
            $table->foreign('id_entertainments')->references('id')->on('entertainments');

            $table->unsignedInteger('id_clothings');
            $table->foreign('id_clothings')->references('id')->on('clothings');

            $table->unsignedInteger('id_healths');
            $table->foreign('id_healths')->references('id')->on('healths');

            $table->unsignedInteger('id_insurances');
            $table->foreign('id_insurances')->references('id')->on('insurances');

            $table->unsignedInteger('id_education');
            $table->foreign('id_education')->references('id')->on('education');

            $table->unsignedInteger('id_miscellaneouses');
            $table->foreign('id_miscellaneouses')->references('id')->on('miscellaneouses');

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
        Schema::dropIfExists('expenses');
    }
}
