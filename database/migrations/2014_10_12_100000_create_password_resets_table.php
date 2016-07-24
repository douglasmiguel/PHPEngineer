<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    public function up()
    {
        Schema::create('user_password_reset', function (Blueprint $table) {
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at')->nullable();
            $table->index('email', 'userPasswordReset_email');
            $table->index('token', 'userPasswordReset_token');
        });
    }
    public function down()
    {
        Schema::drop('user_password_reset');
    }
}
