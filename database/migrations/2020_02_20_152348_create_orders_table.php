<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('register_user_id')->unsigned();
            $table->bigInteger('servicio_id')->unsigned();
            $table->bigInteger('marca_id')->unsigned();
            $table->bigInteger('estado_tenis_id')->unsigned();
            $table->bigInteger('estado_pedido_id')->unsigned();
            $table->integer('abono');
            $table->integer('numero_order');
            $table->string('reference');
            $table->date('fecha_entrega');


            $table->foreign('register_user_id')->references('id')->on('register_users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');


            $table->foreign('servicio_id')->references('id')->on('estados_pedidos')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                    
            $table->foreign('marca_id')->references('id')->on('marcas')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                
             $table->foreign('estado_tenis_id')->references('id')->on('estados_tenis')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

             $table->foreign('estado_pedido_id')->references('id')->on('estados_pedidos')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
}
