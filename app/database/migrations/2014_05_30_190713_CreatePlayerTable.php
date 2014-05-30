<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if ( ! Schema::connection('player')->hasTable('player'))
		{
			$sql = file_get_contents(__DIR__ . '/sql/player.sql');
			DB::connection('player')->statement($sql);
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('player')->drop('player');
	}

}
