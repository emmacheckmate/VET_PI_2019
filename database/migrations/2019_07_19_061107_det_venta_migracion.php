<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetVentaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detVenta',function( Blueprint $tablaDetVenta ) 
        {
            $tablaDetVenta->increments('Id'); //Id det ventas
            $tablaDetVenta->intenger('IdMedic'); //Id de medico
            $tablaDetVenta->intenger('IdArt'); //Id de detventa articulo
            $tablaDetVenta->intenger('IdServ'); //Id de servicio
            $tablaDetVenta->intenger('IdOferta'); //Id de ofertas
            $tablaDetVenta->float('Cantidad',8,2); //Cantida de det ventas
            $tablaDetVenta->float('SubTotal_C_IVA',8,2); //Subtotal de det ventas
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detVenta');
        //
    }
}
