<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title', 120);
            $table->text('description')->nullable();
            $table->string('url', 200)->nullable();
            $table->char('year', 4);
            $table->string('slug', 120);
            $table->timestamps();
            $table->softDeletes();
            $table->unique('slug', 'project_slug');
        });
    }
    public function down()
    {
        Schema::drop('project');
    }
}
