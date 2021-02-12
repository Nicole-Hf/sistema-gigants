<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cantidad');
            $table->float('precio_venta');
            $table->float('importe');
            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('inventario_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('factura_id')->on('facturas')->references('id')
                ->onDelete('cascade');
            $table->foreign('inventario_id')->on('inventarios')->references('id')
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
        Schema::dropIfExists('detalles_facturas');
    }
}
