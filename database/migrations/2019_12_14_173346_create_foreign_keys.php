<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()

	{
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
			});
		// Schema::table('companies', function(Blueprint $table) {
		// 	$table->foreign('user_id')->references('id')->on('users')
		// 				->onDelete('cascade')
		// 				->onUpdate('restrict');
		// });
		// Schema::table('companies', function(Blueprint $table) {
		// 	$table->foreign('contact_id')->references('id')->on('users')
		// 				->onDelete('restrict')
		// 				->onUpdate('restrict');
		// });
		Schema::table('charts', function(Blueprint $table) {
			$table->foreign('metric_id')->references('id')->on('metrics')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('charts', function(Blueprint $table) {
			$table->foreign('dashboard_id')->references('id')->on('dashboards')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('charts', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dashboards', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dashboards', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reports', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reports', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('forms', function(Blueprint $table) {
			$table->foreign('report_id')->references('id')->on('reports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('efiles', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('efiles', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		// Schema::table('companies', function(Blueprint $table) {
		// 	$table->dropForeign('companies_user_id_foreign');
		// });
		// Schema::table('companies', function(Blueprint $table) {
		// 	$table->dropForeign('companies_contact_id_foreign');
		// });
		Schema::table('charts', function(Blueprint $table) {
			$table->dropForeign('charts_metric_id_foreign');
		});
		Schema::table('charts', function(Blueprint $table) {
			$table->dropForeign('charts_dashboard_id_foreign');
		});
		Schema::table('charts', function(Blueprint $table) {
			$table->dropForeign('charts_company_id_foreign');
		});
		Schema::table('dashboards', function(Blueprint $table) {
			$table->dropForeign('dashboards_user_id_foreign');
		});
		Schema::table('dashboards', function(Blueprint $table) {
			$table->dropForeign('dashboards_company_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_company_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_user_id_foreign');
		});
		Schema::table('reports', function(Blueprint $table) {
			$table->dropForeign('reports_company_id_foreign');
		});
		Schema::table('reports', function(Blueprint $table) {
			$table->dropForeign('reports_user_id_foreign');
		});
		Schema::table('forms', function(Blueprint $table) {
			$table->dropForeign('forms_report_id_foreign');
		});
		Schema::table('files', function(Blueprint $table) {
			$table->dropForeign('files_company_id_foreign');
		});
		Schema::table('files', function(Blueprint $table) {
			$table->dropForeign('files_user_id_foreign');
		});
	}
}
