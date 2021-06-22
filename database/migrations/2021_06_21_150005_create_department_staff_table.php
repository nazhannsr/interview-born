<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_staff', function (Blueprint $table) {
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('staff_id');
            $table->timestamps();

            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments');

            $table->foreign('staff_id')
                  ->references('id')
                  ->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_staff');
    }
}
