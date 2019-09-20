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

            //<---------- FK from roles tables ------------>//
            $table->integer('comment_to_user')->unsigned()->index();
            $table->foreign('comment_to_user')->references('id')->on('roles')->onDelete('cascade');
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
