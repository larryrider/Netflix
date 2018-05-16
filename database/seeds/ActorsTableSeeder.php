<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->delete();
        
        DB::table('actors')->insert([
            'name' => 'Winona Ryder'
        ]);
        DB::table('actors')->insert([
            'name' => 'Gaten Matarazzo'
        ]);
        DB::table('actors')->insert([
            'name' => 'Millie Bobby Brown'
        ]);

        DB::table('actors')->insert([
            'name' => 'Taylor Schilling'
        ]);
        DB::table('actors')->insert([
            'name' => 'Kate Mulgrev'
        ]);
        DB::table('actors')->insert([
            'name' => 'Laura Prepon'
        ]);


        DB::table('actors')->insert([
            'name' => 'Ben McKenzie'
        ]);
        DB::table('actors')->insert([
            'name' => 'Donal Logue'
        ]);
        DB::table('actors')->insert([
            'name' => 'Jada Pinkett Smith'
        ]);

        DB::table('actors')->insert([
            'name' => 'Andy Whitfield'
        ]);
        DB::table('actors')->insert([
            'name' => 'Liam McIntyre'
        ]);
        DB::table('actors')->insert([
            'name' => 'Dustin Clare'
        ]);

        DB::table('actors')->insert([
            'name' => 'Stephen Amell'
        ]);
        DB::table('actors')->insert([
            'name' => 'Katie Cassidy'
        ]);
        DB::table('actors')->insert([
            'name' => 'David Ramsey'
        ]);


        DB::table('actors')->insert([
            'name' => 'Wagner Moura'
        ]);
        DB::table('actors')->insert([
            'name' => 'Pedro Pascal'
        ]);
        DB::table('actors')->insert([
            'name' => 'Boyd Holbrook'
        ]);


        DB::table('actors')->insert([
            'name' => 'Travis Fimmel'
        ]);
        DB::table('actors')->insert([
            'name' => 'Katheryn Winnick'
        ]);
        DB::table('actors')->insert([
            'name' => 'Clive Standen'
        ]);


    
        DB::table('actors')->insert([
            'name' => 'Mike Colter'
        ]);
        DB::table('actors')->insert([
            'name' => 'Alfred Woodard'
        ]);
        DB::table('actors')->insert([
            'name' => 'Rosario Dawson'
        ]);

        DB::table('actors')->insert([
            'name' => 'Jesse Plemons'
        ]);
        DB::table('actors')->insert([
            'name' => 'Cristini Milioti'
        ]);
        DB::table('actors')->insert([
            'name' => 'Jimmi Simpson'
        ]);


        DB::table('actors')->insert([
            'name' => 'Dylan Minnete'
        ]);
        DB::table('actors')->insert([
            'name' => 'Katheryn Langford'
        ]);
        DB::table('actors')->insert([
            'name' => 'Kate Walsh'
        ]);


        DB::table('actors')->insert([
            'name' => 'Blanca Suarez'
        ]);
        DB::table('actors')->insert([
            'name' => 'Nadia de Santiago'
        ]);
        DB::table('actors')->insert([
            'name' => 'Ana Fernandez'
        ]);


        DB::table('actors')->insert([
            'name' => 'Tatiana Maslany'
        ]);
        DB::table('actors')->insert([
            'name' => 'Dylan Bruce'
        ]);
        DB::table('actors')->insert([
            'name' => 'Jordan Gavaris'
        ]);


        DB::table('actors')->insert([
            'name' => 'Jessica Barden'
        ]);
        DB::table('actors')->insert([
            'name' => 'Alex Lawther'
        ]);
        DB::table('actors')->insert([
            'name' => 'Steve Oram'
        ]);

        DB::table('actors')->insert([
            'name' => 'Charlie Cox'
        ]);
        DB::table('actors')->insert([
            'name' => 'Elden Helson'
        ]);


        DB::table('actors')->insert([
            'name' => 'Sofia Vergara'
        ]);
        DB::table('actors')->insert([
            'name' => 'Julie Bowen'
        ]);
        DB::table('actors')->insert([
            'name' => 'Ty Burrel'
        ]);


        DB::table('actors')->insert([
            'name' => 'Josh Radnor'
        ]);
        DB::table('actors')->insert([
            'name' => 'Jason Segel'
        ]);
        DB::table('actors')->insert([
            'name' => 'Neil Patrick Harris'
        ]);

        DB::table('actors')->insert([
            'name' => 'Jennifer Aniston'
        ]);
        DB::table('actors')->insert([
            'name' => 'Courteney Cox'
        ]);
        DB::table('actors')->insert([
            'name' => 'Lisa Kudrow'
        ]);


        DB::table('actors')->insert([
            'name' => 'Justin Roiland'
        ]);
        DB::table('actors')->insert([
            'name' => 'Chris Parnell'
        ]);
        DB::table('actors')->insert([
            'name' => 'Spencer Grammer'
        ]);


        DB::table('actors')->insert([
            'name' => 'Eric McCormack'
        ]);
        DB::table('actors')->insert([
            'name' => 'MacKenzie Porter'
        ]);
        DB::table('actors')->insert([
            'name' => 'Nesta Cooper'
        ]);


        DB::table('actors')->insert([
            'name' => 'Evan Peters'
        ]);
        DB::table('actors')->insert([
            'name' => 'Sarah Paulson'
        ]);
        DB::table('actors')->insert([
            'name' => 'Jessica Lange'
        ]);
    }
}
