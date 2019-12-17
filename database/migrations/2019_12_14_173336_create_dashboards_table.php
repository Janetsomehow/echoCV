<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardsTable extends Migration {

	public function up()
	{
		Schema::create('dashboards', function(Blueprint $table) {
		$table->engine = 'MYISAM';
			$table->increments('id');
			$table->string('name');
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
			$table->bigInteger('company_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('dashboards');
	}
}
