<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersRegisterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_register_user', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('register_user_id');
            $table->integer('orders_id');

           
            
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
        Schema::dropIfExists('orders_register_user');
    }
}
