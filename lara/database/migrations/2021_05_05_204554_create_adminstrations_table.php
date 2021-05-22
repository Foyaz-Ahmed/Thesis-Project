<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminstrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminstrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_nid');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('type');
            $table->string('phone');
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
        Schema::dropIfExists('adminstrations');
    }
}
