<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPregunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id', true);
            $table->string('contenido', '100');
            $table->string('tipo', '30');
            $table->integer('evaluacion_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('pregunta', function($table) {
            $table->foreign('evaluacion_id')->references('id')->on('evaluacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pregunta');
    }
}
