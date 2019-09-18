<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sasos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('saso_id');
            $table->integer('order_id');//for key
            $table->string('saso_number');//for key
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
        Schema::dropIfExists('sasos');
    }
}
