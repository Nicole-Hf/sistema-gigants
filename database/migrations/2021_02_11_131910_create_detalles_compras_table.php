<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cantidad');
            $table->float('costo_compra');
            $table->float('importe');
            $table->unsignedBigInteger('compra_id');
            $table->unsignedBigInteger('inventario_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('compra_id')->on('compras')->references('id')
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
        Schema::dropIfExists('detalles_compras');
    }
}
