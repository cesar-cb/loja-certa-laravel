<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('customer')->unsigned();
            $table->foreign('customer')
                  ->references('id')->on('customers')
                  ->onDelete('cascade');
                  
            $table->integer('product')->unsigned();
            $table->foreign('product')
                  ->references('id')->on('products')
                  ->onDelete('cascade');
                  
            $table->string('status');
            
            $table->dateTime('due_date');
            
            $table->decimal('paid_price', 8, 2);
            
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
        Schema::drop('reservations');
    }
}
