<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetServMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detServ',function( Blueprint $tablaDetServ ) 
        {
            $tablaDetServ->increments('Id'); //Id DetArticulo
            $tablaDetServ->intenger('IdServ');//Id Servicio
            $tablaDetServ->intenger('IdDoc');//Id Doctor
            $tablaDetServ->intenger('IdAyudante'); //Id Ayudante
            $tablaDetServ->date('Fecha'); //fecha det_serv
            $tablaDetServ->integer('IdMedicamento'); //Id Medicamento
            $tablaDetServ->string('CantMedicamento'); //Cantidad Medicamento
            $tablaDetServ->float('Costo',8,2); //Costo Servicio
            $tablaDetServ->intenger('IdMascota'); //Id de la mascota
        } );
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detServ');
    }
}
