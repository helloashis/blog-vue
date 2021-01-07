<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
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

        foreach(range(1,20) as $index){
            User::create([

                'name' =>$faker->unique()->name,
                'email' =>$faker->unique()->email,
                'password' =>bcrypt($faker->password),
    
            ]);

        }

        $this->defaultUserdata();

        
    }


    public function defaultUserdata()
    {
        User::create([

            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),

        ]);
    }
}
