<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->id();
               $table->string('m_id');
             $table->string('sponsor_id')->nullable();
               $table->string('placement_id')->nullable();
                 $table->string('placement')->nullable();
                   $table->string('activation_date')->nullable();
                   $table->string('sponsor_name')->nullable();
               $table->string('m_name')->nullable();
                 $table->string('m_mobile')->nullable();
                   $table->string('m_email')->nullable();
                    $table->string('m_pan')->nullable();
               $table->string('m_gender')->nullable();
                 $table->string('m_state_id')->nullable();
                   $table->string('m_city_id')->nullable();
                    $table->string('m_pincode')->nullable();
               $table->string('m_address')->nullable();
                 $table->string('m_status')->nullable();
                   $table->string('m_photo')->nullable();
                     $table->string('m_date')->nullable();
               $table->string('block_date')->nullable();
                 $table->string('package')->nullable();
                   $table->string('max_capping')->nullable();
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
        Schema::dropIfExists('member');
    }
}
