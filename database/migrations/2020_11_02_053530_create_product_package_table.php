<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_package', function (Blueprint $table) {
            $table->id();
             $table->string('package_name');
             $table->double('package_price')->nullable();
               $table->string('package_color')->nullable();
                 $table->string('BV')->nullable();
                   $table->string('CI')->nullable();
                   $table->string('part_amount')->nullable();
               $table->string('status')->nullable();
                
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
        Schema::dropIfExists('product_package');
    }
}
