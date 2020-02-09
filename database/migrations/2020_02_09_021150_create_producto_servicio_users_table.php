<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoServicioUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_servicio_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cedula_id')->unsigned();
            $table->bigInteger('servicio_id')->unsigned();
            $table->bigInteger('marcas_id')->unsigned();
            $table->bigInteger('estado_tenis_id')->unsigned();
            $table->bigInteger('estado_pedido_id')->unsigned();
            $table->integer('abono');
            $table->integer('numero_order');
            $table->integer('referencia');
            $table->date('fecha_entrega');



                    $table->foreign('cedula_id')->references('id')->on('register_users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                    
                    $table->foreign('servicio_id')->references('id')->on('tipos_servicios')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                
                    $table->foreign('marcas_id')->references('id')->on('marcas')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                        
                    $table->foreign('estado_tenis_id')->references('id')->on('estados_tenis')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

                    $table->foreign('estado_pedido_id')->references('id')->on('estados_pedidos')
                    
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_servicio_users');
    }
}
