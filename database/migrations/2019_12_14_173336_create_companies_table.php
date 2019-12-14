<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	public function up()
	{
		Schema::create('companies', function(Blueprint $table) {
			$table->increments('id');
			$table->uuid('uuid')->nullable();
			$table->string('name');
			$table->string('website')->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->bigInteger('country_id');
			$table->bigInteger('contact_id')->unsigned();
			$table->enum('status', array('open', 'close'))->nullable();
			$table->enum('stage', array('seed', 'seriesA', 'seriesB', 'seriesC'))->nullable();
			$table->string('lead')->nullable();
			$table->string('analyst')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('companies');
	}
}