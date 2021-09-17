<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number');
            $table->string('name');
            $table->string('father_name');
            $table->string('image')->nullable();
            $table->timestamp('dob');
            $table->bigInteger('cnic')->nullable();
            $table->integer('class');
            $table->bigInteger('mobile');
            $table->string('shift')->nullable();
            $table->bigInteger('religion')->nullable();
            $table->string('address',300);
            $table->string('school_id');
            $table->timestamp('doa')->useCurrent();
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
        Schema::dropIfExists('students');
    }
}
