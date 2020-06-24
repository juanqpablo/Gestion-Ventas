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
            $table->bigIncrements('id');
            $table->string('cod')->unique();
            $table->string('name');
            $table->string('apellido');
            $table->string('comuna');
            $table->string('direccion');
            $table->string('fono');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('rol');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
