<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	public function up()
	{
		Schema::create('files', function(Blueprint $table) {
		$table->engine = 'MYISAM';
			$table->increments('id');
			$table->string('name');
			$table->string('size')->nullable();
			$table->string('type')->nullable();
			$table->enum('status', array('active', 'archive'))->nullable();
			$table->bigInteger('company_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('files');
	}
}
