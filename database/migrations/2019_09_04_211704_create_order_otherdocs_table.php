<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderOtherdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_otherdocs', function (Blueprint $table) {
            $table->increments('ood_id');
            $table->int('order_id');//fk
            $table->int('ood_number');
            $table->date('expirydate');
            $table->text('description');
            $table->int(file_id);//fk
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
        Schema::dropIfExists('order_otherdocs');
    }
}
