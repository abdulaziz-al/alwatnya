<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->engine = 'InnoDB';

    //<---------- FK from User tables ------------>//
    $table->integer('admin_id')->unsigned()->index();
    $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
  //----------------------FK form roles -------------------//
  $table->integer('role_id')->unsigned()->index();
  $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            
  
            //----------------------FK form previliges -------------------//
            $table->integer('previlige_id')->unsigned()->index();
            $table->foreign('previlige_id')->references('id')->on('previliges')->onDelete('cascade');
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
        Schema::dropIfExists('admins');
    }
}
