<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ayudantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudantes',function(blueprint $tablaAyundates ) 
        {
            $tablaAyudantes->increments('Id'); //clave primaria para ayudantes
            $tablaAyudantes->intenger('IdUsr');// clave externa de usuario 
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
