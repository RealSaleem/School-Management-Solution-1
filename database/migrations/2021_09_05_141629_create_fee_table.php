<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee', function (Blueprint $table) {
            $table->id();
            $table->string('recpt_no')->nullable();
            $table->integer('student_id');
            $table->integer('status')->default('0');
            $table->bigInteger('fee_type_id')->nullable();
            $table->integer('school_id');
            $table->string('month');
            $table->string('year');
            $table->bigInteger('fee')->nullable();
            $table->bigInteger('recived')->nullable();
            $table->integer('is_advance')->default('0');
            $table->bigInteger('total')->nullable();
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
        Schema::dropIfExists('fee');
    }
}
