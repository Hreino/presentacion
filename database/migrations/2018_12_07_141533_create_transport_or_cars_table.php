<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportOrCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_or_cars', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->decimal('monthlyPayments');
            $table->decimal('fuel');
            $table->decimal('carInsurance');
            $table->decimal('maintainance');
            $table->decimal('publicTransport');
            $table->decimal('taxi');
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
        Schema::dropIfExists('transport_or_cars');
    }
}
