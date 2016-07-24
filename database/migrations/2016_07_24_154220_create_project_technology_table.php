<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTechnologyTable extends Migration
{
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('technology_id')->unsigned();
            $table->timestamps();
            $table->foreign('project_id', 'projectTechnology_project')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('technology_id', 'projectTechnology_technology')->references('id')->on('technology')->onUpdate('cascade')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::drop('project_technology');
    }
}
