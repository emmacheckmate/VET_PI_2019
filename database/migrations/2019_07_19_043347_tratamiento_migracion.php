<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TratamientoMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamiento',function( Blueprint $tablaTratamiento ) 
        {
            $tablaTratamiento->increments('Id'); //Id para tratamiento
            $tablaTratamiento->string('Nombre',100);//Nombre del tratamiento
            $tablaTratamiento->float('Costo',8,2);//Precio del tratamiento
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Scheme::dropIfExists('tratamiento');
    }
}
