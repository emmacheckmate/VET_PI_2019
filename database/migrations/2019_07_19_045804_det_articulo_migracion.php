<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetArticuloMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detArticulo',function( Blueprint $tablaDetArticulo ) 
        {
            $tablaDetArticulo->increments('Id'); //Id DetArticulo
            $tablaDetArticulo->intenger('IdArticulo');//Id Articulo
            $tablaDetArticulo->intenger('IdMascota'); //IdMascota
            $tablaDetArticulo->intenger('IdMascota'); //IdMascota


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
