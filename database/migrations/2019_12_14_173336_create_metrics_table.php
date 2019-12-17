<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetricsTable extends Migration {

	public function up()
	{
		Schema::create('metrics', function(Blueprint $table) {
		$table->engine = 'MYISAM';
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('desc')->nullable();
			$table->string('uploaded_file')->nullable();
			$table->string('unit')->nullable();
			$table->string('datasource')->nullable();
			$table->string('sheet')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('metrics');
	}
}
