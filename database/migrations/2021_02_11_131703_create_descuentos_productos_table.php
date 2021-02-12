<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescuentosProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cantidad');
            $table->float('precio_descuento');
            $table->unsignedBigInteger('descuento_id');
            $table->unsignedBigInteger('producto_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('descuento_id')->on('descuentos')->references('id')
                ->onDelete('cascade');
            $table->foreign('producto_id')->on('productos')->references('id')
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
        Schema::dropIfExists('descuentos_productos');
    }
}
