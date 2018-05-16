<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->delete();
        
        DB::table('series')->insert([
            'title' => 'Stranger Things',
            'description' => 'Unos niños frikis y una que mueve cosas con la mente',
            'seasons' => 2,
            'image' => '/img/series/stranger.png',
            'image_preview' => '/img/previews/stranger.jpg',
            'year' => 2016,
            'rating_age' => 16,
            'director_id' => 2
        ]);

        DB::table('series')->insert([
            'title' => 'Orange is the new black',
            'description' => 'Unas en la carcel',
            'seasons' => 4,
            'image' => '/img/series/orange.png',
            'image_preview' => '/img/previews/orange.jpg',
            'year' => 2016,
            'rating_age' => 16,
            'director_id' => 3
        ]);

        DB::table('series')->insert([
            'title' => 'Gotham',
            'description' => 'Batman de pequeño',
            'seasons' => 3,
            'image' => '/img/series/gotham.jpg',
            'image_preview' => '/img/previews/gotham.webp',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 4
        ]);

        DB::table('series')->insert([
            'title' => 'Spartacus',
            'description' => 'Espartaco espartaco',
            'seasons' => 4,
            'image' => '/img/series/spartacus.jpg',
            'image_preview' => '/img/previews/spartacus.webp',
            'year' => 2013,
            'rating_age' => 18,
            'director_id' => 5
        ]);

        DB::table('series')->insert([
            'title' => 'Arrow',
            'description' => 'Uno que tira flechas',
            'seasons' => 5,
            'image' => '/img/series/arrow.png',
            'image_preview' => '/img/previews/arrow.webp',
            'year' => 2017,
            'rating_age' => 12,
            'director_id' => 6
        ]);

        DB::table('series')->insert([
            'title' => 'Narcos',
            'description' => 'Plata o plomo',
            'seasons' => 3,
            'image' => '/img/series/narcos.jpg',
            'image_preview' => '/img/previews/narcos.jpg',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 7
        ]);

        DB::table('series')->insert([
            'title' => 'Vikingos',
            'description' => 'Ragnar el loco',
            'seasons' => 4,
            'image' => '/img/series/vikingos.jpg',
            'image_preview' => '/img/previews/vikingos.webp',
            'year' => 2017,
            'rating_age' => 18,
            'director_id' => 8
        ]);

        DB::table('series')->insert([
            'title' => 'Luke Cage',
            'description' => 'Un superheroe muy majo',
            'seasons' => 1,
            'image' => '/img/series/lukecage.jpg',
            'image_preview' => '/img/previews/lukecage.webp',
            'year' => 2016,
            'rating_age' => 16,
            'director_id' => 9
        ]);

        DB::table('series')->insert([
            'title' => 'Black Mirror',
            'description' => 'Movidas futuristas muy locas',
            'seasons' => 4,
            'image' => '/img/series/blackmirror.jpg',
            'image_preview' => '/img/previews/blackmirror.webp',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 10
        ]);

        DB::table('series')->insert([
            'title' => 'Por trece razones',
            'description' => 'Adolescentes con sus movidas',
            'seasons' => 1,
            'image' => '/img/series/13razones.png',
            'image_preview' => '/img/previews/13razones.webp',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 11
        ]);

        DB::table('series')->insert([
            'title' => 'Las Chicas del Cable',
            'description' => 'Cuatro chicas españolas liandola muy parda',
            'seasons' => 2,
            'image' => '/img/series/chicascable.jpg',
            'image_preview' => '/img/previews/chicascable.webp',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 1
        ]);

        DB::table('series')->insert([
            'title' => 'Orphan Black',
            'description' => 'Unas chicas muy parecidas tienen problemas',
            'seasons' => 2,
            'image' => '/img/series/orphanblack.jpg',
            'image_preview' => '/img/previews/orphanblack.webp',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 12
        ]);

        DB::table('series')->insert([
            'title' => 'The End of the F***ing World',
            'description' => 'Ella quiere irse de viaje y él matarle, se lia parda',
            'seasons' => 1,
            'image' => '/img/series/theend.jpg',
            'image_preview' => '/img/previews/theend.webp',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 12
        ]);

        DB::table('series')->insert([
            'title' => 'Daredevil',
            'description' => 'Esta ciego pero ve mejor que tu',
            'seasons' => 2,
            'image' => '/img/series/daredevil.jpg',
            'image_preview' => '/img/previews/daredevil.webp',
            'year' => 2016,
            'rating_age' => 16,
            'director_id' => 9
        ]);

        DB::table('series')->insert([
            'title' => 'Modern Family',
            'description' => 'Una familia un tanto peculiar',
            'seasons' => 8,
            'image' => '/img/series/modernfamily.jpg',
            'image_preview' => '/img/previews/modernfamily.webp',
            'year' => 2017,
            'rating_age' => 0,
            'director_id' => 13
        ]);

        DB::table('series')->insert([
            'title' => 'Cómo conocí a vuestra madre',
            'description' => 'Va de todo menos de cómo conoció a su madre',
            'seasons' => 9,
            'image' => '/img/series/comoconoci.jpg',
            'image_preview' => '/img/previews/comoconoci.webp',
            'year' => 2014,
            'rating_age' => 12,
            'director_id' => 14
        ]);

        DB::table('series')->insert([
            'title' => 'Friends',
            'description' => 'Unos amigos bastante entrañables',
            'seasons' => 10,
            'image' => '/img/series/friends.png',
            'image_preview' => '/img/previews/friends.webp',
            'year' => 2003,
            'rating_age' => 12,
            'director_id' => 15
        ]);

        DB::table('series')->insert([
            'title' => 'Rick y Morty',
            'description' => 'Dibujos animados aunque no recomendado para niños',
            'seasons' => 2,
            'image' => '/img/series/rickymorty.jpg',
            'image_preview' => '/img/previews/rickymorty.webp',
            'year' => 2015,
            'rating_age' => 16,
            'director_id' => 16
        ]);

        DB::table('series')->insert([
            'title' => 'Viajeros',
            'description' => 'Parece que viajan bastante',
            'seasons' => 2,
            'image' => '/img/series/viajeros.jpg',
            'image_preview' => '/img/previews/viajeros.jpg',
            'year' => 2017,
            'rating_age' => 16,
            'director_id' => 17
        ]);

        DB::table('series')->insert([
            'title' => 'American Horror History',
            'description' => 'Miedo en general',
            'seasons' => 5,
            'image' => '/img/series/horrorstory.jpg',
            'image_preview' => '/img/previews/horrorstory.webp',
            'year' => 2016,
            'rating_age' => 18,
            'director_id' => 18
        ]);
        
    }
}
