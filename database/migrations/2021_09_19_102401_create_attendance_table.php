<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('student_id');
            $table->string('date');
            $table->integer('leave')->nullable();
            $table->integer('leave_type')->nullable();
            $table->string('leave_detail',100)->nullable();
            $table->integer('present')->nullable();
            $table->integer('absent')->nullable();
            $table->string('absent_detail',100)->nullable();
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
        Schema::dropIfExists('attendance');
    }
}
