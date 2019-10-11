<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('comment_description');
            

            //<---------- FK from users tables ------------>//
            $table->integer('comment_by_user')->unsigned()->index();
            $table->foreign('comment_by_user')->references('id')->on('users')->onDelete('cascade');

        //<---------- FK from order tables ------------>//
        $table->integer('order_id')->unsigned()->index();
        $table->foreign('order_id')->references('id')->on('user_oreders')->onDelete('cascade');
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
        Schema::dropIfExists('comments');
    }
}
