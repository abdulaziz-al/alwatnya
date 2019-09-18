<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_numbers', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('pn_id');
            $table->integer('order_id');//for key
            $table->string('policy_number');
            $table->date('expirydate');
            $table->integer('file_id');//for key
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
        Schema::dropIfExists('policy_numbers');
    }
}
