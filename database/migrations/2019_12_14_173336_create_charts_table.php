<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChartsTable extends Migration {

	public function up()
	{
		Schema::create('charts', function(Blueprint $table) {
		$table->engine = 'MYISAM';
			$table->increments('id');
			$table->string('name');
			$table->enum('type', array('column', 'bar', 'funnel', 'pie', 'spline'))->nullable();
			$table->string('investment')->nullable();
			$table->string('exit')->nullable();
			$table->bigInteger('metric_id')->unsigned();
			$table->bigInteger('dashboard_id')->unsigned();
			$table->bigInteger('company_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('charts');
	}
}
