<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_serie')->delete();
        
        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 1
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 8,
            'serie_id' => 1
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 3
        ]);


        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 2
        ]);
        DB::table('category_serie')->insert([
            'category_id' => 4,
            'serie_id' => 2
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 8,
            'serie_id' => 5
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 6,
            'serie_id' => 6
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 6
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 7
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 6,
            'serie_id' => 7
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 1
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 2
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 3
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 4
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 5
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 6
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 2,
            'serie_id' => 7
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 8
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 9
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 10
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 11
        ]);
        
        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 12
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 13
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 1,
            'serie_id' => 14
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 15
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 3,
            'serie_id' => 15
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 6,
            'serie_id' => 4
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 16
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 3,
            'serie_id' => 16
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 17
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 3,
            'serie_id' => 17
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 18
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 8,
            'serie_id' => 18
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 6,
            'serie_id' => 18
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 4,
            'serie_id' => 4
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 4,
            'serie_id' => 3
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 19
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 4,
            'serie_id' => 19
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 6,
            'serie_id' => 19
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 7,
            'serie_id' => 20
        ]);

        DB::table('category_serie')->insert([
            'category_id' => 5,
            'serie_id' => 20
        ]);
    }
}
