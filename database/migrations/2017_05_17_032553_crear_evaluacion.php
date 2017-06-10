<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', '30');
            $table->string('administrador_nombre_usuario','30')->nullable();
            $table->integer('instalacion_id')->unsigned()->nullable();
            $table->foreign('administrador_nombre_usuario')->references('nombre_usuario')->on('administrador');
            $table->foreign('instalacion_id')->references('id')->on('instalacion');
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
        Schema::drop('evaluacion');
    }
}
