<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcs', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
             $table->integer('school_id');
            $table->string('school_name');
            $table->string('class');
            $table->integer('roll_num')->nullable();
            $table->integer('percentage')->nullable();
            $table->string('grade')->nullable();
            $table->string('dol');
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
        Schema::dropIfExists('tcs');
    }
}
