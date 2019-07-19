<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriasArticulosMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_articulos',function( Blueprint $tablaCategArticulo ) 
        {
            $tablaCategArticulo->increments('Id'); //Id para categorias articulo
            $tablaCategArticulo->String('Nombre',100);//Nombre de la categoría
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_articulos');
    }
}
