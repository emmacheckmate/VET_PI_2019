<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clinicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicas',function(blueprint $tablaClinicas ) 
        {
            $tablaClinicas->increments('Id'); //clave primaria para la clinica
            $tablaClinicas->string('Nombre',100 ); //nombre de la clinica
            $tablaClinicas->string('Direccion',100 );//dirección de la clinica
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
