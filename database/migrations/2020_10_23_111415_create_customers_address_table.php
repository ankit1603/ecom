<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_address', function (Blueprint $table) {
            $table->id();
             $table->integer('customer_id');
              $table->string('address_line_1')->nullable();
             $table->string('address_line_2')->nullable();
              $table->string('landmark')->nullable();
               $table->string('area')->nullable();
                $table->string('address_type')->nullable();
             $table->string('city')->nullable();
             $table->string('state')->nullable();
             $table->string('zip_code')->nullable();
             $table->string('name')->nullable();
             $table->integer('country_id')->nullable();
                $table->string('email')->nullable();
               $table->string('phone')->nullable();
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
        Schema::dropIfExists('customers_address');
    }
}
