<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllowancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowances', function (Blueprint $table) {
            $table->id();
            $table->string('allowance_name');
            $table->float('allowance_amount');
            $table->string('allowance_description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('mode');
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
        Schema::dropIfExists('allowances');
    }
}
