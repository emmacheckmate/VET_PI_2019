<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos',function(blueprint $tablaMedicamentos ) 
        {
            $tablaMedicamentos->increments('Id'); 
            $tablaMedicamentos->string('Nombre',100 );
            $tablaMedicamentos->string('Presentacion',100 );
            $tablaMedicamentos->string('ml_mg',100 );
            $tablaMedicamentos->string('Compuesto',100 );
            $tablaMedicamentos->string('Precio',100 );
            $tablaMedicamentos->string('Laboratorio',100 );
            $tablaMedicamentos->string('Paq_unidad',100 );
            $tablaMedicamentos->string('Controlado',100 );
            $tablaMedicamentos->string('Fecha_Caducidad',100 );
            $tablaMedicamentos->string('Stock',100 );
            $tablaMedicamentos->string('Vacuna',100 ); //bandera
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
