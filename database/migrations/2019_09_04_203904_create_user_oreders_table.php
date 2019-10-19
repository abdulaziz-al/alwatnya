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
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->boolean('importeport_id');
            $table->integer('number_of_trucks');

                 //<---------- FK from User tables ------------>//
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
                //<---------- FK from User tables ------------>//
            $table->integer('admin_id')->unsigned()->index()->nullable();
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
            
                //<---------- FK from CR tables ------------>//
            $table->integer('cr_id')->unsigned()->index();
            $table->foreign('cr_id')->references('id')->on('commercial_records')->onDelete('cascade');
            
                //<---------- FK from Invoice tables ------------>//
            $table->integer('invoice_id')->unsigned()->index();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            
                //<---------- FK from Status tables ------------>//
            $table->integer('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');

            $table->boolean('seen');
            
            
            

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
