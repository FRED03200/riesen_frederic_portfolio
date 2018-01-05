<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableTraining;

class TrainingController extends Controller
{
    public function formation(){
        $liste = TableTraining::orderBy('start_date', 'desc')->get();
        return View('mytraining', compact('liste')); 
    }
}
?>