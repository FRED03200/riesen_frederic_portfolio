<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TableMySkills;
class SkillsController extends Controller
{
    public function competences(){
        $liste= TableMySkills::all();
        return View('myskills',compact('liste')); 
    }
}
?>