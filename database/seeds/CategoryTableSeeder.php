<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        foreach(range(1,50) as $index){
        	$slug = strtolower($faker->unique()->name);
            Category::create([

                'cat_name' =>$faker->unique()->name,
                'cat_slug' =>str_replace(' ', '-', $slug),
    
            ]);

        }
    }
}
