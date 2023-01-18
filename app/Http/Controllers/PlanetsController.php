<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetsController extends Controller
{
    public function getAllDataFromDB()
    {
        $planets = Planet::all();  
        foreach ($planets as $planet){
            echo $planet;
            echo $planet->films ."<br><br>";
        }
        return;  
    }

    public function getFilmsByPlanetId($id)
    {
        $planet = Planet::find($id);  
        if ($planet) {
            echo ("<b>Planet:</b>".$planet."<br><br>");
            echo('<b>Films belongs to film:</b><br>'. $planet->films);
        } else {
            echo 'Planet with such id not exist';
        }
        return;
    }
}
