<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default('avatar.png')->nullable();
            $table->string('phone_no')->nullable();            
            $table->string('password');
            $table->timestamp('email_verified_at');
            $table->enum('type', array('owner', 'client'))->nullable();
            $table->enum('permission', array('view', 'edit', 'admin'))->nullable();
            $table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		 Schema::dropIfExists('users');
	}
}