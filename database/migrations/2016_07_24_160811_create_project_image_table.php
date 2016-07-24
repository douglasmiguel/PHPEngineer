<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImageTable extends Migration
{
    public function up()
    {
        Schema::create('project_image', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->string('image', 120);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('project_id', 'projectImage_project')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::drop('project_image');
    }
}
