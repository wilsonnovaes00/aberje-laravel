<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('ramal');
            $table->string('host');
            $table->integer('telefone');
            $table->string('email');
            $table->integer('aniversario');
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
        Schema::drop('hosts_models');
    }
}
