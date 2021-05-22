<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_nid');
            $table->string('p_name');
            $table->string('email');
            $table->string('password');
            $table->string('age');
            $table->string('phone');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('address');
            $table->string('e_contact');
            $table->string('p_image');
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
        Schema::dropIfExists('patients');
    }
}
