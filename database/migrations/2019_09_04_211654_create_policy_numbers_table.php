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

            $table->increments('id');

            $table->string('policy_number')->nullable();
            $table->string('expirydateH')->nullable();
            $table->string('expirydateM')->nullable();

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
        Schema::dropIfExists('policy_numbers');
    }
}
