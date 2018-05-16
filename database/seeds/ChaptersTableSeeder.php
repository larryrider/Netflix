<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->delete();

        //STRANGER 
        for($i=1; $i<=2; $i++){
            for($j=1;$j<=9;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '1',
                    'season' => $i
                ]);
            }
        }

        //ORANGE 
        for($i=1; $i<=4; $i++){
            for($j=1;$j<=13;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '2',
                    'season' => $i
                ]);
            }
        }

        //Gotham 
        for($i=1; $i<=3; $i++){
            for($j=1;$j<=22;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '3',
                    'season' => $i
                ]);
            }
        }

        //spartacus
        for($i=1; $i<=4; $i++){
            for($j=1;$j<=13;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '4',
                    'season' => $i
                ]);
            }
        }

        //arrow
        for($i=1; $i<=5; $i++){
            for($j=1;$j<=23;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '5',
                    'season' => $i
                ]);
            }
        }

        //narcos
        for($i=1; $i<=3; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '6',
                    'season' => $i
                ]);
            }
        }

        //vikingos
        for($i=1; $i<=4; $i++){
            for($j=1;$j<=9;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '7',
                    'season' => $i
                ]);
            }
        }

        //lukecage
        for($i=1; $i<=1; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '8',
                    'season' => $i
                ]);
            }
        }

        //blackmirror
        for($i=1; $i<=4; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '9',
                    'season' => $i
                ]);
            }
        }

        //13razones
        for($i=1; $i<=1; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '10',
                    'season' => $i
                ]);
            }
        }

        //chicascable
        for($i=1; $i<=2; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '11',
                    'season' => $i
                ]);
            }
        }

        //orphanblack
        for($i=1; $i<=2; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '12',
                    'season' => $i
                ]);
            }
        }

        //theend
        for($i=1; $i<=1; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '13',
                    'season' => $i
                ]);
            }
        }

        //daredevil
        for($i=1; $i<=2; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '14',
                    'season' => $i
                ]);
            }
        }

        //moderfamily
        for($i=1; $i<=8; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '15',
                    'season' => $i
                ]);
            }
        }

        //comoconoci
        for($i=1; $i<=9; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '16',
                    'season' => $i
                ]);
            }
        }

        //friends
        for($i=1; $i<=10; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '17',
                    'season' => $i
                ]);
            }
        }

        //rickymorty
        for($i=1; $i<=2; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '18',
                    'season' => $i
                ]);
            }
        }

        //viajeros
        for($i=1; $i<=2; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '19',
                    'season' => $i
                ]);
            }
        }

        //americanhorror
        for($i=1; $i<=5; $i++){
            for($j=1;$j<=10;$j++){
                DB::table('chapters')->insert([
                    'title' => 'Capitulo '.$j,
                    'description' => 'Cap'.$j,
                    'serie_id' => '14',
                    'season' => $i
                ]);
            }
        }
    }
}
