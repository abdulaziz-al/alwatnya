<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_logs', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('logs_id');
       //<---------- FK from User tables ------------>//
       $table->integer('user_id')->unsigned()->index();
       $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->string('source_ip');
            $table->string('description');
            $table->date('created_on');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_logs');
    }
}
