<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll', function (Blueprint $table) {
            $table->id();
            $table->string('employeeId');
            $table->string('totalWorkingDays');
            $table->string('present');
            $table->string('absent');
            $table->float('salary');
            $table->string('allowances');
            $table->float('allowanceAmount');
            $table->string('deductions');
            $table->float('deduction_amount');
            $table->float('net');
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
        Schema::dropIfExists('payroll');
    }
}
