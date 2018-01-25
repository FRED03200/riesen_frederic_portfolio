<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableContactForm;
use App\TableTraining;
use App\TableMySkills;
use App\TableMyAchievements;
use App\Http\Requests\TrainingRequest;
use App\Http\Requests\MyAchievementsRequest;
use App\Http\Requests\MySkillsRequest;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = TableContactForm::all();
        return view('admin', compact('contacts'));
    }

    public function formations()
    {
        $formations = TableTraining::all();
        return view('admin.formations', compact('formations'));
    }

    public function competences()
    {
        $competences = TableMySkills::all();
        return view('admin.competences', compact('competences'));
    }

    public function realisations()
    {
        $realisations = TableMyAchievements::all();
        return view('admin.realisations', compact('realisations'));
    }

    public function delete($id)
    {
        TableContactForm::destroy($id);
        return redirect('admin')->with('message', 'Le message a bien été supprimé');
    }

    public function supprFormation($id)
    {
        TableTraining::destroy($id);
        return redirect('formations')->with('message', 'La formation a bien été supprimée');
    }

    public function addFormation(TrainingRequest $request)
    {
        TableTraining::create($request->except('_token', 'valider'));
        return redirect('formations')->with('message', 'La formation a bien été ajoutée');
    }

    public function modifFormation($id)
    {
        $formation = TableTraining::find($id);
        return view('admin.modifFormation',compact('formation'));
    }

    public function updateFormation(TrainingRequest $request)
    {
        $formation = TableTraining::find($request->id);
        $formation->id_user = $request->id_user;
        $formation->organized = $request->organized;
        $formation->contenue = $request->contenue;
        $formation->start_date = $request->start_date;
        $formation->expiration_date = $request->expiration_date;
        $formation->save();
        return redirect('formations')->with('message', 'La formation a bien été modifiée');
    }


     public function modifRealisation($id)
    {
        $realisation = TableMyAchievements::find($id);
        return view('admin.modifRealisation',compact('realisation'));
    }

     public function updateRealisation(MyAchievementsRequest $request)
    {
        $realisation = TableMyAchievements::find($request->id);
        
        $realisation->id_user = $request->id_user;
        $realisation->title = $request->title;
        $realisation->date_creation = $request->date_creation;
     //   $realisation->image = $request->image;
        $realisation->descriptive = $request->descriptive;
        $realisation->save();
        return redirect('realisations')->with('message', 'La réalisation a bien été modifiée');
    }

     public function addRealisation(MyAchievementsRequest $request)
    {
        TableMyAchievements::create($request->except('_token', 'valider'));
        return redirect('realisations')->with('message', 'La réalisation a bien été ajoutée');
    }

    public function supprRealisation($id)
    {
        TableMyAchievements::destroy($id);
        return redirect('realisations')->with('message', 'La réalisation a bien été supprimée');
    }

     public function modifCompetence($id)
    {
        $competence = TableMySkills::find($id);
        return view('admin.modifCompetence',compact('competence'));
    }

     public function updateCompetence(MySkillsRequest $request)
    {
        $competence = TableMySkills::find($request->id);
        
        $competence->id_user = $request->id_user;
        // $competence->skills = $request->skills;
        $competence->listecategory = $request->listecategory;
        $competence->save();
        return redirect('comptetences')->with('message', 'La compétence a bien été modifiée');
    }

     public function addCompetence(MySkillsRequest $request)
    {
        TableMySkills::create($request->except('_token', 'valider'));
        return redirect('competences')->with('message', 'La compétence a bien été ajoutée');
    }

    public function supprCompetence($id)
    {
        TableMySkills::destroy($id);
        return redirect('competences')->with('message', 'La compétence a bien été supprimée');
    }

 }   