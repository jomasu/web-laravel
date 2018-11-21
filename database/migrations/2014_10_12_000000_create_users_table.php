<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name')->nullable($value = true);
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('adress_id')->nullable($value = true);
            $table->date('birthdate')->nullable($value = true);
            $table->string('phone_number')->nullable($value = true);
            $table->rememberToken()->nullable($value = true);
            $table->string('role')->nullable($value = true);
            $table->boolean('activate')->nullable($value = true);
            $table->timestamps()->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
