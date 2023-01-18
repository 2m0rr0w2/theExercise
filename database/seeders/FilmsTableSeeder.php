<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Http;
use DB;


class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        $data = Http::get('https://swapi.dev/api/films');
        $code = $data->getStatusCode();
        if ($code != 200)
            return;  // TO DO: throw error with code status
        $json = $data->json();

        for ($i = 0; $i < $json["count"]; $i++) {
            $film = $json["results"][$i];
            DB::table('films')->updateOrInsert([
            
                'title' => $film['title'],
                'episode_id' => $film['episode_id'],
                'director' => $film['director'],
                'created' => $film['created'],
                'edited' => $film['edited'],
            
            ]);
            foreach ($film['planets'] as $planetUrl) {
                //extract planet id from planet url
                $urlPieces = explode("/", $planetUrl);
                end($urlPieces);
                $planetId = prev($urlPieces);
                //insert film and planet ids to film_planet connection table
                DB::table('film_planet')->updateOrInsert([
            
                    'film_id' => $i+1,
                    'planet_id' => $planetId,
                ]);
            }
        }
    }
}
