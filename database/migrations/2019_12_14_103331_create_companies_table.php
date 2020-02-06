<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	public function up()
	{
		Schema::create('companies', function(Blueprint $table) {
<<<<<<< HEAD
		//$table->engine = 'MYISAM';
=======
			$table->engine = 'MYISAM';
>>>>>>> 44f59515a3690e996a973b5955a582e7518f6057
			$table->increments('id');
			$table->uuid('uuid')->nullable();
			$table->string('c_name');
			$table->string('website')->nullable();
<<<<<<< HEAD
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->string('country');
			$table->bigInteger('contact_id')->unsigned();
=======
			$table->bigInteger('user_id')->unsigned();
			$table->string('country')->unsigned();
			$table->string('contact_id')->unsigned();
>>>>>>> 44f59515a3690e996a973b5955a582e7518f6057
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
