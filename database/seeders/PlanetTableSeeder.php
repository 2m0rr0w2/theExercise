<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use DB;

class PlanetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nextUrl = 'https://swapi.dev/api/planets/?page=1';
        while (isset($nextUrl) )
        {
            $data = Http::get( $nextUrl );
            $nextUrl = $data["next"];
            $code = $data->getStatusCode();
            if ($code != 200)
                return;  // TO DO: throw error with code status
            $json = $data->json();
            foreach($json["results"] as $planet){
                DB::table('planets')->updateOrInsert([
                    'name' => $planet['name'],
                    'rotation_period' => $planet['rotation_period'],
                    'orbital_period' => $planet['orbital_period'],
                    'diameter' => $planet['diameter'],
                    'climate' => $planet['climate'],
    
                ]);
            }
            
        }
        
    }
}
