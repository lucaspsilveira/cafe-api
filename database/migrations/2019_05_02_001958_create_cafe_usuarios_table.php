<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafeUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafe_usuarios', function (Blueprint $table) {
            $table->integer('id_cafe')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->integer('nota_sabor')->unsigned();
            $table->integer('nota_aroma')->unsigned();
            $table->integer('nota_intensidade')->unsigned();
            $table->integer('nota_acidez')->unsigned();
            
            
            $table->foreign('id_cafe')->references('id')->on('cafes');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->primary(['id_cafe', 'id_usuario']);
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
        Schema::dropIfExists('cafe_usuarios');
    }
}
