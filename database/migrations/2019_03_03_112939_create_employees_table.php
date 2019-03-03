<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('mobile_number');
			$table->datetime('hire_date');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}