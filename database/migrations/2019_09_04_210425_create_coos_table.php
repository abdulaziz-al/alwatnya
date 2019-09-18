<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('coo_id');
            $table->integer('order_id');//FK
            $table->string('coo_number');
            $table->date('expirydate');
            $table->integer('file');//FK
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
        Schema::dropIfExists('coos');
    }
}
