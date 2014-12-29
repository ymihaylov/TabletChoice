<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Item::create([
				'category_id' => 2,
				'name' => $faker->word(),
				'img_url' => '',
				'short_description' => $faker->text(),
				'description' => $faker->text(),
				'price' => $faker->numberBetween(1, 25),
				'quantity' => $faker->numberBetween(100, 600),
			]);
		}
	}

}