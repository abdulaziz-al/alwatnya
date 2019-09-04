<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExemptionLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemption_letters', function (Blueprint $table) {
            $table->increments('el_id');
            $table->int('order_id');//for key
            $table->string('el_number');// for key
            $table->date('expirydate');
            $table->int('file_id');//for key 
            
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
        Schema::dropIfExists('exemption_letters');
    }
}
