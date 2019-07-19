<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportesExtMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportesExt',function( Blueprint $tablaReportesExt ) 
        {
            $tablaReportesExt->increments('Id'); //Id Det Enfermedad mascota
            $tablaReportesExt->string('Nombre',100);//Nombre reporte
            $tablaReportesExt->string('Foto',100);//Fotografía para reporte
            $tablaReportesExt->string('F_Ext',100);//
            $tablaReportesExt->string('Direccion',100);//Nombre reporte
            $tablaReportesExt->string('LugarExt',100);//Nombre reporte
            $tablaReportesExt->string('Caract1',100);//
            $tablaReportesExt->string('Caract2',100);//
            $tablaReportesExt->string('Caract3',100);//
            $tablaReportesExt->string('Especie',100);
            $tablaReportesExt->string('Raza',100);//Nombre reporte
            $tablaReportesExt->string('Encontrado',5);
            $tablaReportesExt->string('Dueno',100);
            $tablaReportesExt->string('Contacto1',100);
            $tablaReportesExt->string('Contacto2',100);
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportesExt');
    }
}
