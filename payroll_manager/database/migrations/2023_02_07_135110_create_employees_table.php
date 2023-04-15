<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.S
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('employee_profile')->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('gender');
            $table->integer('designation_id');
            $table->integer('department_id');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('contact');
            $table->float('salary');
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
        Schema::dropIfExists('employees');
    }
}
