<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function($table){
            $table->increments('idusuario');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('user')->unique();
            $table->string('senha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
