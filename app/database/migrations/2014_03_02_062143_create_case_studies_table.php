<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStudiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_studies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->integer('client_id');
			$table->longText('how_we_helped');
			$table->longText('what_we_did');
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
		Schema::drop('case_studies');
	}

}
