<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        
        DB::table('categories')->insert([
            'category' => 'Originales de Netflix'
        ]);
        DB::table('categories')->insert([
            'category' => 'Popular en Netflix'
        ]);
             
        DB::table('categories')->insert([
            'category' => 'Comedia'
        ]);
        DB::table('categories')->insert([
            'category' => 'Drama'
        ]);
        DB::table('categories')->insert([
            'category' => 'Terror'
        ]);

        DB::table('categories')->insert([
            'category' => 'Accion'
        ]);
        DB::table('categories')->insert([
            'category' => 'Serie TV'
        ]);
        DB::table('categories')->insert([
            'category' => 'Ciencia Ficcion'
        ]);
        
    }
}
