<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('value');
            $table->timestamps();
            $table->softDeletes();
            $table->unique('name', 'config_name');
        });
    }
    public function down()
    {
        Schema::drop('config');
    }
}
