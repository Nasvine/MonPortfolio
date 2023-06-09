<?php

namespace App\Http\Controllers;

use App\Models\admin\Experience;
use App\Models\admin\Formation;
use App\Models\admin\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $skills = Skill::all();
        $experiences = Experience::all();
        $formations = Formation::all();
        return view('pages.layouts.index', compact('skills', 'experiences', 'formations'));
    }
}
