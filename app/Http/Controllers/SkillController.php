<?php

namespace App\Http\Controllers;

use App\Models\admin\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.index', compact('skills'));
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
    public function store(StoreSkillRequest $request)
    {
       # dd($request->all());
        $tab = array(
            'name'  => $request->name,
            'progression' =>  $request->progression,
            'progression_color' =>  $request->progression_color
       );

       Skill::create($tab);
       return  redirect()->back()->with('success', 'Compétence ajoutée avec succès ! ! !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, $id)
    {
        $skill = Skill::find($id);
        $tab = array(
            'name'         =>  $request->input('name')         == null ? $skill->name          : $request->input('name'),
            'progression'  =>  $request->input('progression')  == null ? $skill->progression   : $request->input('progression'),
            'progression_color'  =>  $request->input('progression_color')  == null ? $skill->progression_color   : $request->input('progression_color')
        );

        $update = Skill::where('id', $id)->update($tab);
        return  redirect()->back()->with('success', 'Compétence modifiée avec succès ! ! !');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Skill::find($id)->delete();
        return  redirect()->back()->with('success', 'Compétence supprimée avec succès ! ! !');
    }
}
