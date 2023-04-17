<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $i;

        for($i = 1; $i<=10; $i++){
            $posts[]=[
                'author_id' => $faker->numberBetween(1,499),
                'title'     => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'excerpt'   => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'content'   => $faker->text,
                'image'     => $faker->imageUrl($width = 640, $height = 480)
            ];
           
        }
        DB::table("posts")->insert($posts);
    }
}
