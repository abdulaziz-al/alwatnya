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
            $table->increments('cr_id');
            $table->int('user_id');//for key
            $table->int('order_id');//for key
            $table->int('file_id');//for key
            $table->string('cr_number');//for key
            $table->string('cr_expiry');//for key
            
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
