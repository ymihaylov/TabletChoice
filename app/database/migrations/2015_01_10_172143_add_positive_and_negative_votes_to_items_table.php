<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPositiveAndNegativeVotesToItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items', function(Blueprint $table)
		{
			$table->integer('positive_votes')->nullable()->after('quantity');
			$table->integer('negative_votes')->nullable()->after('positive_votes');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('items', function(Blueprint $table)
		{
			$table->dropColumn('positive_votes');
			$table->dropColumn('negative_votes');
		});
	}

}
