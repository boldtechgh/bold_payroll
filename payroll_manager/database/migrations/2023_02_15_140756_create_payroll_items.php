<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_items', function (Blueprint $table) {
            $table->id();
            $table->string('payrool_id');
            $table->string('employee_id');
            $table->integer('total_days');
            $table->integer('days_worked');
            $table->float('salary');
            $table->float('total-allowance');
            $table->float('total_deductions');
            $table->float('net-salary');
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
        Schema::dropIfExists('payroll_items');
    }
}
