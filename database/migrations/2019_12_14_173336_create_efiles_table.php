<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEfilesTable extends Migration {

	public function up()
	{
		Schema::create('efiles', function(Blueprint $table) {
		$table->engine = 'MYISAM';
			$table->increments('id');
			$table->string('name');
			$table->string('size')->nullable();
			$table->string('type')->nullable();
			$table->string('path')->nullable();
			$table->enum('status', array('active', 'archive'))->nullable();
			$table->string('source')->nullable();
			$table->bigInteger('company_id')->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->softdeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('efiles');
	}
}
