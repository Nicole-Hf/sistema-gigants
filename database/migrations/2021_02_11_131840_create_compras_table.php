<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->char('estado');
            $table->date('fecha');
            $table->float('total')->default(0);
            $table->float('saldo')->default(0);
            $table->unsignedBigInteger('tipo_compra_id');
            $table->unsignedBigInteger('administrador_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('tipo_compra_id')->on('tipos_compras')->references('id')
                ->onDelete('cascade');
            $table->foreign('administrador_id')->on('personas')->references('id')
                ->onDelete('cascade');
            $table->foreign('proveedor_id')->on('personas')->references('id')
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
        Schema::dropIfExists('compras');
    }
}
