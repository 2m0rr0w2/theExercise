<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Planet;

class FilmsController extends Controller
{
    public function getAllDataFromDB()
    {
        $films = Film::all();  
        foreach ($films as $film){
            echo $film;
            echo $film->planets ."<br><br>";
        }
        return;  
    }

    public function getPlanetsByFilmId($id)
    {
        $film = Film::find($id);  
        if ($film) {
            echo ("<b>Film:</b>".$film."<br><br>");
            echo('<b>Planets belongs to film:</b><br>'. $film->planets);
        } else {
            echo 'Film with such id not exist';
        }
        return;
    }
}
