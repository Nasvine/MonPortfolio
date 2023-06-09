<?php

namespace App\Http\Controllers;

use App\Models\admin\Formation;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use Carbon\Carbon;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('admin.formation.index', compact('formations'));
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
    public function store(StoreFormationRequest $request)
    {

        $date_debut = $request->input('date_debut');
        $date_debut_month = Carbon::parse($date_debut)->locale('fr')->monthName;
        $date_debut_year = Carbon::parse($date_debut)->format('Y');

        $date_fin = $request->input('date_fin');
        $date_fin_month = Carbon::parse($date_fin)->locale('fr')->monthName;
        $date_fin_year = Carbon::parse($date_fin)->format('Y');

        $tab = array(
            'formation'  =>  $request->formation,
            'ecole'      =>  $request->ecole,
            'date_debut' =>  $date_debut_month." ".$date_debut_year,
            'date_fin' =>  $date_fin_month." ".$date_fin_year,
       );

       Formation::create($tab);
       return  redirect()->back()->with('success', 'Formation ajoutée avec succès ! ! !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormationRequest $request, $id)
    {
        $formation = Formation::find($id);

        $date_debut = $request->input('date_debut');
        $date_debut_month = Carbon::parse($date_debut)->locale('fr')->monthName;
        $date_debut_year = Carbon::parse($date_debut)->format('Y');

        $date_fin = $request->input('date_fin');
        $date_fin_month = Carbon::parse($date_fin)->locale('fr')->monthName;
        $date_fin_year = Carbon::parse($date_fin)->format('Y');

        $tab = array(
            'formation'  =>  $request->input('formation')   == null ? $formation->formation   : $request->input('formation'),
            'ecole'      =>  $request->input('ecole')       == null ? $formation->ecole       : $request->input('ecole'),
            'date_debut' =>  $request->input('date_debut')   == null ? $formation->date_debut     : $date_debut_month." ".$date_debut_year,
            'date_fin'   =>  $request->input('date_fin')     == null ? $formation->date_fin       : $date_fin_month." ".$date_fin_year,
        );

        $update = Formation::where('id', $id)->update($tab);
        return  redirect()->back()->with('success', 'Formation modifiée avec succès ! ! !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Formation::find($id)->delete();
        return  redirect()->back()->with('success', 'Formation supprimée avec succès ! ! !');
    }
}
