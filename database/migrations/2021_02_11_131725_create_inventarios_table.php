<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('existencia');
            $table->unsignedBigInteger('minimo_stock')->nullable();
            $table->unsignedBigInteger('maximo_stock')->nullable();
            $table->unsignedBigInteger('almacen_id');
            $table->unsignedBigInteger('producto_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('almacen_id')->on('almacenes')->references('id')
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
        Schema::dropIfExists('inventarios');
    }
}
