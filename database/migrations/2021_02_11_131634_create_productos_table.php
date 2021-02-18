<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',200);
            $table->string('codigo_barra');
            $table->float('precio');
            $table->date('fecha_creacion');
            $table->unsignedBigInteger('linea_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('familia_id');
            $table->unsignedBigInteger('talla_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('promocion_id')->nullable(true);
            $table->unsignedBigInteger('temporada_id');
            $table->unsignedBigInteger('sector_id')->nullable(true);
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('linea_id')->on('lineas')->references('id')
                ->onDelete('cascade');
            $table->foreign('marca_id')->on('marcas')->references('id')
                ->onDelete('cascade');
            $table->foreign('familia_id')->on('familias')->references('id')
                ->onDelete('cascade');
            $table->foreign('talla_id')->on('tallas')->references('id')
                ->onDelete('cascade');
            $table->foreign('color_id')->on('colores')->references('id')
                ->onDelete('cascade');
            $table->foreign('modelo_id')->on('modelos')->references('id')
                ->onDelete('cascade');
            $table->foreign('promocion_id')->on('promociones')->references('id')
                ->onDelete('cascade');
            $table->foreign('temporada_id')->on('temporadas')->references('id')
                ->onDelete('cascade');
            $table->foreign('sector_id')->on('sectores')->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
