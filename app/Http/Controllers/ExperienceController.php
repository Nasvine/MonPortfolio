<?php

namespace App\Http\Controllers;

use App\Models\admin\Experience;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use Carbon\Carbon;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        $date_debut = $request->input('date_debut');
        $date_debut_month = Carbon::parse($date_debut)->locale('fr')->monthName;
        $date_debut_year = Carbon::parse($date_debut)->format('Y');

        $date_fin = $request->input('date_fin');
        $date_fin_month = Carbon::parse($date_fin)->locale('fr')->monthName;
        $date_fin_year = Carbon::parse($date_fin)->format('Y');


        
        $tab = array(
            'poste'  => $request->input('poste'),
            'entreprise'  => $request->input('entreprise'),
            'date_debut' =>  $date_debut_month." ".$date_debut_year,
            'date_fin' =>  $date_fin_month." ".$date_fin_year,
            'statut' =>  $request->input('statut'),
            'description' =>  $request->input('description'),
        );
        #dd($request->all(), $tab);

       Experience::create($tab);
       return  redirect()->back()->with('success', 'Expérience ajoutée avec succès ! ! !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, $id)
    {
        $experience = Experience::find($id);

        $date_debut = $request->input('date_debut');
        $date_debut_month = Carbon::parse($date_debut)->locale('fr')->monthName;
        $date_debut_year = Carbon::parse($date_debut)->format('Y');

        $date_fin = $request->input('date_fin');
        $date_fin_month = Carbon::parse($date_fin)->locale('fr')->monthName;
        $date_fin_year = Carbon::parse($date_fin)->format('Y');

        $tab = array(
            'poste'         =>  $request->input('poste')        == null ? $experience->poste          : $request->input('poste'),
            'entreprise'    =>  $request->input('entreprise')   == null ? $experience->entreprise     : $request->input('entreprise'),
            'statut'        =>  $request->input('statut')       == null ? $experience->statut         : $request->input('statut'),
            'date_debut'    =>  $request->input('date_debut')   == null ? $experience->date_debut     : $date_debut_month." ".$date_debut_year,
            'date_fin'      =>  $request->input('date_fin')     == null ? $experience->date_fin       : $date_fin_month." ".$date_fin_year,
            'description'   =>  $request->input('description')  == null ? $experience->description    : $request->input('description')
        );

        $update = Experience::where('id', $id)->update($tab);
        return  redirect()->back()->with('success', 'Expérience modifiée avec succès ! ! !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Experience::find($id)->delete();
        return  redirect()->back()->with('success', 'Expérience supprimée avec succès ! ! !');
    }
}
