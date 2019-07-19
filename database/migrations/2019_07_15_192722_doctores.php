<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doctores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores',function(blueprint $tablaDoctores ) 
        {
            $tablaDoctores->increments('Id'); 
            $tablaDoctores->string('Nombre',100 );
            $tablaDoctores->string('Ap_P',100 );
            $tablaDoctores->string('Ap_M',100 ); 
            $tablaDoctores->string('Cedula',10 );
            $tablaDoctores->string('Tel',100 ); 
            $tablaDoctores->string('Correo',10 ); 
            $tablaDoctores->string('Cel',100 ); 
            $tablaDoctores->string('Dir',100 ); 
            $tablaDoctores->string('Esp1',100 ); 
            $tablaDoctores->string('Esp2',100 ); 
            $tablaDoctores->string('Urgencia',100 ); 
            $tablaDoctores->string('IdUs1',100 ); 
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
