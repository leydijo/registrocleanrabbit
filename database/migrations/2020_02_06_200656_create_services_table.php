<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_servicio')->nullable();;
            $table->string('marcas')->nullable();;
            $table->string('estado_tenis')->nullable();;
            $table->string('abono')->nullable();;
            $table->string('numero_order')->nullable();;
            $table->string('referencia')->nullable();;
            $table->string('estado_pedido')->nullable();;
            $table->date('fecha_entrega')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
