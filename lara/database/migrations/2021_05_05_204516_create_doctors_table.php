<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('d_nid');
            $table->string('d_name');
            $table->string('email');
            $table->string('password');
            $table->string('age');
            $table->string('phone');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('address');
            $table->string('qualification');
            $table->string('status');
            $table->string('duty_time');
            $table->string('d_image');
            $table->date('dob');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
