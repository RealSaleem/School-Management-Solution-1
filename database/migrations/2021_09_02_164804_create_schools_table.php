<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('short_name');
            $table->string('address',300);
            $table->string('email');
            $table->text('logo');
            $table->integer('user_id');
            $table->string('owner_name',100);
            $table->bigInteger('owner_cnic_number')->nullable();
             $table->bigInteger('mobile')->nullable();
            $table->integer('is_active')->default(0);
            $table->integer('is_verified')->default(0);
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
        Schema::dropIfExists('schools');
    }
}
