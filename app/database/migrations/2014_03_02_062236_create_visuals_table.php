<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisualsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visuals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->string('name');
			$table->string('caption');
			$table->enum('status', array('hidden','shown'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visuals');
	}

}
