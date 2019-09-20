<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_records', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

         
              
                       

                 //<---------- FK from User tables ------------>//
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
                //<---------- FK from Order tables ------------>//
            $table->integer('order_id')->nullable();
    
            
            $table->integer('file_id')->unsigned()->index();
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');



                        
            $table->string('cr_number');
            $table->string('cr_expiry');

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
        Schema::dropIfExists('commercial_records');
    }
}
