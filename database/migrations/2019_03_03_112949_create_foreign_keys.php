<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('employees', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('day_employee', function(Blueprint $table) {
			$table->foreign('employee_id')->references('id')->on('employees')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('day_employee', function(Blueprint $table) {
			$table->foreign('day_id')->references('id')->on('dayes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('employees', function(Blueprint $table) {
			$table->dropForeign('employees_user_id_foreign');
		});
		Schema::table('day_employee', function(Blueprint $table) {
			$table->dropForeign('day_employee_employee_id_foreign');
		});
		Schema::table('day_employee', function(Blueprint $table) {
			$table->dropForeign('day_employee_day_id_foreign');
		});
	}
}