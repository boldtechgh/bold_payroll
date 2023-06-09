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
            $table->string('payroll_id');
            $table->string('employee_id');
            $table->integer('total_days');
            $table->integer('days_worked');
            $table->float('salary');
            $table->float('total_allowance');
            $table->float('total_deduction');
            $table->float('total_salary');
            $table->float('paye_tax');
            $table->float('net_salary');
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