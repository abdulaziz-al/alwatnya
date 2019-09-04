<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuqassahStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muqassah_statements', function (Blueprint $table) {
            $table->increments('ms_id');
            $table->integer('order_id');//for key
            $table->string('ms_number');//for key 
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
        Schema::dropIfExists('muqassah_statements');
    }
}
