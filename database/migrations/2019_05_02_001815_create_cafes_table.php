<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_marca')->unsigned();
            $table->string('nome');
            $table->string('foto')->nullable();
            $table->string('torra');
            $table->string('tipo_de_grao');
            $table->integer('faixa_de_preco')->unsigned();
            $table->timestamps();

            $table->foreign('id_marca')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes');
    }
}
