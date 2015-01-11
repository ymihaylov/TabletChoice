<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class InsertDefaultUserToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		User::create([
			'email' => 'admin@tabletchoice.com',
			'name' => 'admin',
			'password' => '654321',
		])->save();
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$user = User::where('email', '=', 'admin@tabletchoice.com');
		$user->delete();
	}

}
