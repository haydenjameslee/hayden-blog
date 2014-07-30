<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $title = 'Awesome project ' . $index;

			Project::create(array(
                'title' => $title,
                'description'  => $faker->text,
                'slug'  => strtolower(str_replace(' ', '-', $title)),
                'url'   => 'https://github.com/JeffreyWay/Laravel-4-Generators',
                'mediaUrl' => '/img/default.png',
                'isVideo' => false,
                'tagline' => 'A new take on smart pockets'
            ));
		}
	}

}