<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->delete();
        
        DB::table('directors')->insert([
            'name' => 'Ramon Campos'
        ]);

        DB::table('directors')->insert([
            'name' => 'Los hermanos Duffer'
        ]);

        DB::table('directors')->insert([
            'name' => 'Jenji Kohan'
        ]);

        DB::table('directors')->insert([
            'name' => 'Danny Cannon'
        ]);

        DB::table('directors')->insert([
            'name' => 'Steven S.DeKnight'
        ]);

        DB::table('directors')->insert([
            'name' => 'James Bamford'
        ]);

        DB::table('directors')->insert([
            'name' => 'Chris Brancato'
        ]);
        DB::table('directors')->insert([
            'name' => 'Michael Hirst'
        ]);

        DB::table('directors')->insert([
            'name' => 'Cheo Hodari Coker'
        ]);

        DB::table('directors')->insert([
            'name' => 'Charlie Brooker'
        ]);

        DB::table('directors')->insert([
            'name' => 'Brian Yorkey'
        ]);

        DB::table('directors')->insert([
            'name' => 'John Fawcett'
        ]);

        DB::table('directors')->insert([
            'name' => 'Christopher Lloyd'
        ]);

        DB::table('directors')->insert([
            'name' => 'Carter Bays'
        ]);
        DB::table('directors')->insert([
            'name' => 'David Crane'
        ]);
        DB::table('directors')->insert([
            'name' => 'Dan Harmon'
        ]);

        DB::table('directors')->insert([
            'name' => 'Brad Wright'
        ]);

        DB::table('directors')->insert([
            'name' => 'Ryan Murphy'
        ]);
        
    }
}
