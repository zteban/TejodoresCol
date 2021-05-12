<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();//integer unsigned increment
            $table->string('name');//varchar
            $table->string('email')->unique();//varchar registro unico 
            $table->timestamp('email_verified_at')->nullable();//cada vez que se envie un campo que puede quedar null
            $table->string('password');
            $table->bigInteger('documento');
            $table->string('tipoDoc');
            $table->string('direccion');
            $table->bigInteger('celular');
            $table->string('ciudad');
            $table->integer('idActor');
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
