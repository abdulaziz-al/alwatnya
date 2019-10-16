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

            $table->increments('id');
            $table->string('coo_number')->nullable();
            $table->string('expirydate')->nullable();
            //<---------- FK from order tables ------------>//
            $table->integer('order_id')->unsigned()->index();
            $table->foreign('order_id')->references('id')->on('user_oreders')->onDelete('cascade');

            //<---------- FK from Files tables ------------>//
            $table->integer('file_id')->unsigned()->index();
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
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
