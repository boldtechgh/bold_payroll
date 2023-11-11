<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayeTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paye_taxes', function (Blueprint $table) {
            $table->id();
            $table->float('chargeable_income');
            $table->float('rate');
            $table->float('payable');
            $table->float('cummulative_income');
            $table->float('cummulative_payable');
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
        Schema::dropIfExists('paye_taxes');
    }
}