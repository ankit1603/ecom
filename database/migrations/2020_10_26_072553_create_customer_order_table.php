<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_order', function (Blueprint $table) {
            $table->id();
             $table->string('customerid')->nullable();
             $table->string('user_id')->nullable();
             $table->string('customeraddress')->nullable();
             $table->string('Total')->nullable();
             $table->string('Discount')->nullable();
             $table->string('TotalAmount')->nullable();
             $table->integer('Payment_Type')->nullable();
            $table->string('order_status')->nullable();
            $table->string('DeliveryDate')->nullable();
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
        Schema::dropIfExists('customer_order');
    }
}
