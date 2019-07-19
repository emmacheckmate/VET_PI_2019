<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mascotas extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas',function(blueprint $tablaMascotas ) 
        {
            $tablaMascotas->increments('Id'); 
            $tablaMascotas->string('IdDueno',100 );
            $tablaMascotas->string('Nombre',100 );
            $tablaMascotas->string('Edad',100 ); 
            $tablaMascotas->string('Especie',10 );
            $tablaMascotas->string('Raza',100 ); 
            $tablaMascotas->string('Foto',10 ); 
            $tablaMascotas->string('PrefDoc',100 ); 
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
