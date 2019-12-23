<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Hash;
use Carbon\Carbon;

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
            $table->enum('type', array('echovc', 'client'))->nullable();
            $table->enum('permission', array('view', 'edit', 'admin'))->default('admin')->nullable();
            $table->rememberToken();
			$table->timestamps();
		});

		/**
		*Create dummy users
		* remove this from production
		*
		**/

		DB::table('users')->insert(array(
            'fname' => 'Eniola',
            'lname' => 'James',
            'type' => 'echovc',
            'email' => 'admin@domain.com',
            'email_verified_at' => Carbon::now();
            'password' =>  Hash::make('password'),

            //$2y$10$7c/JJ6v8qgHKmITv1fC1KuYeDyY8fsoUhqpHvWAoaveFQsFwbncj6
        ));

        DB::table('users')->insert(array(
            'name' => 'Teacher',
            'role' => 'teacher',
            'email' => 'teacher@domain.com',
            'password' =>  Hash::make('password'),
       ));
	}

	public function down()
	{
		 Schema::dropIfExists('users');
	}
}