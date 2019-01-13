<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'decs' => $faker->paragraph,
                'image' => $faker->image(),
                'content' => $faker->text
            ]);
        }
    }
}
