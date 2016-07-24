<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologyTable extends Migration
{
    public function up()
    {
        Schema::create('technology', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('technology');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::drop('technology');
    }
}
