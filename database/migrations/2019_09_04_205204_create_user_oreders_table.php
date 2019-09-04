<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOredersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_oreders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id');//for key 
            $table->integer('admin_id');//for key
            $table->integer('cr_id');//for key
            $table->integer('invoice_id');//for key
            $table->boolean('importeport_id');//for key
            $table->integer('number_of_trucks');//for key
            $table->integer('status_id');//for key
            $table->integer('comment_id');//for key

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
        Schema::dropIfExists('user__oreders');
    }
}
