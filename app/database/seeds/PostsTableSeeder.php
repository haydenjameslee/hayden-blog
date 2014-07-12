<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $title = 'Blog Post ' . $index;

			Post::create(array(
                'title' => $title,
                'body'  => $faker->text,
                'slug'  => strtolower(str_replace(' ', '-', $title))
			));
		}
	}

}