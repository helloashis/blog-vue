<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

        foreach(range(1,50) as $index){
        	$slug = strtolower($faker->unique()->name);
            Post::create([

                'user_id' =>rand('1','10'),
                'cat_id' =>rand('1','10'),
                'title' =>$faker->unique()->name,
                'slug' =>str_replace(' ', '-', $slug),
                'content' =>$faker->name,
                'thumbnail' =>$faker->imageUrl(),
    
            ]);

        }
    }
}
