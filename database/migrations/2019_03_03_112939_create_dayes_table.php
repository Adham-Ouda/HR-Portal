<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDayesTable extends Migration {

	public function up()
	{
		Schema::create('dayes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->datetime('day');
		});
	}

	public function down()
	{
		Schema::drop('dayes');
	}
}