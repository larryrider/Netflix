<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->delete();
        $faker = Faker\Factory::create();
        for($i=1;$i<=20;$i++){
            for($j=1;$j<=3;$j++){

                DB::table('reviews')->insert([
                    'description' => $faker->text(30),
                    'stars' => rand(1,5),
                    'user_id' => $j,
                    'serie_id' => $i
                ]);
            }
        }
        
    }
}
