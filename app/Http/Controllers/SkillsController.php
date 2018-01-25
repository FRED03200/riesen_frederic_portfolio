<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TableMySkills;
class SkillsController extends Controller
{
    public function competences(){
        $liste= TableMySkills::orderBy('created_at', 'DESC')->get();
        return View('myskills',compact('liste')); 
    }
}
?>