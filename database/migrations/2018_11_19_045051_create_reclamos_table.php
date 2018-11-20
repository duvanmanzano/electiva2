<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReclamosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Documento');
            $table->string('Correo');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->text('Motivo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reclamos');
    }
}
