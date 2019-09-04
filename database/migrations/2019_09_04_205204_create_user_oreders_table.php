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
            $table->int('user_id');//for key 
            $table->int('admin_id');//for key
            $table->int('cr_id');//for key
            $table->int('invoice_id');//for key
            $table->boolean('importeport_id');//for key
            $table->int('number_of_trucks');//for key
            $table->int('status_id');//for key
            $table->int('comment_id');//for key

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
