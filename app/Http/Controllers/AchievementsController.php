<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableMyAchievements;
class AchievementsController extends Controller
{
    public function realisations(){
        $liste= TableMyAchievements::orderBy('date_creation', 'DESC')->get();
        return View('myachievements',compact('liste')); 
    }
}
?> 