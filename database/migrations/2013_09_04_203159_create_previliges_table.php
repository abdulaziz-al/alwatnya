<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviligesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previliges', function (Blueprint $table) {
            $table->engine = 'InnoDB';


            $table->increments('id');
             
            $table->boolean('Create_user');
            $table->boolean('active_cr');
            $table->boolean('edit_order');
            $table->boolean('view_year');
            

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
        Schema::dropIfExists('previliges');
    }
}
