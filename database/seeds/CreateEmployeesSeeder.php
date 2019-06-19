<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CreateEmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,100000) as $index){
            DB::table('employees')->insert([
                'name' => $faker->name,
                'male' => $faker->titleMale,
                'rang_id' => rand(1,3)   
            ]);

        }
    }
}
