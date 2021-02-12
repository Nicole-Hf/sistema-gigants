<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nit');
            $table->unsignedInteger('nro_factura');
            $table->unsignedBigInteger('nro_autorizacion');
            $table->date('fecha_emision');
            $table->string('descripcion',100);
            $table->float('total');
            $table->string('codigo_control',20);
            $table->date('fecha_limite');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('vendedor_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('cliente_id')->on('personas')->references('id')
                ->onDelete('cascade');
            $table->foreign('vendedor_id')->on('personas')->references('id')
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
        Schema::dropIfExists('facturas');
    }
}
