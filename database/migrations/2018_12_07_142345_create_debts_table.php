<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->decimal('creditCardOne');
            $table->decimal('creditCardTwo');
            $table->decimal('creditCardThree');
            $table->decimal('creditCardFour');
            $table->decimal('loanOne');
            $table->decimal('loanTwo');
            $table->decimal('loanThree');
            $table->decimal('loanFour');
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
        Schema::dropIfExists('debts');
    }
}
