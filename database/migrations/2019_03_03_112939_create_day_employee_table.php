<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDayEmployeeTable extends Migration {

	public function up()
	{
		Schema::create('day_employee', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('employee_id')->unsigned();
			$table->integer('day_id')->unsigned();
			$table->decimal('working_hours');
			$table->enum('status', array('present', 'absent', 'sick_leave', 'day_off'));
		});
	}

	public function down()
	{
		Schema::drop('day_employee');
	}
}