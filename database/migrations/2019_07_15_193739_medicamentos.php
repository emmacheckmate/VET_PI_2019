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
            $tablaMedicamentos->increments('Id');//clave primaria para el medicamento
            $tablaMedicamentos->string('Nombre',100 );// nombre del medicamento
            $tablaMedicamentos->string('Presentacion',100 );//tipo de presentacion para el medicamento
            $tablaMedicamentos->string('ml_mg',100 );//Si es en militros o miligramos
            $tablaMedicamentos->string('Compuesto',100 ); //Tipo de compuesto del medicamento 
            $tablaMedicamentos->string('Precio',100 ); //costo del medicamento
            $tablaMedicamentos->string('Laboratorio',100 ); //Labotoratorio en el que se producio
            $tablaMedicamentos->string('Paq_unidad',100 ); //Es por paquetes  o por unidades
            $tablaMedicamentos->intenger('Controlado'); //Tipo de medicamento controlado
            $tablaMedicamentos->string('Fecha_Caducidad',100 ); //fecha en el que caduca el medicamento
            $tablaMedicamentos->intenger('Stock',100 ); // cuantos existen en stock
            $tablaMedicamentos->intenger('Vacuna'); //bandera
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
