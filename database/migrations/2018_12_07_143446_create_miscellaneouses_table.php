<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiscellaneousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscellaneouses', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->decimal('newspaper');
            $table->decimal('journals');
            $table->decimal('subscriptionsOne');
            $table->decimal('subscriptionTwo');
            $table->decimal('makeup');
            $table->decimal('hairdressing');
            $table->decimal('laundry');
            $table->decimal('coffee');
            $table->decimal('feesToClubs');
            $table->decimal('dialyMoney');
            $table->decimal('birthdays');
            $table->decimal('aniversaries');
            $table->decimal('christmas');
            $table->decimal('familySupport');
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
        Schema::dropIfExists('miscellaneouses');
    }
}
