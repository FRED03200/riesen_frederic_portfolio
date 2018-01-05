<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableMyAchievements;
class AchievementsController extends Controller
{
    public function realisations(){
        $liste= TableMyAchievements::all();
        return View('myachievements',compact('liste')); 
    }
}
?>