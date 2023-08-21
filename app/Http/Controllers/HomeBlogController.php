<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Experience;
use App\Models\admin\Formation;
use App\Models\admin\Skill;

class HomeBlogController extends Controller
{
    public function index(){
        $skills = Skill::all();
        $experiences = Experience::all();
        $formations = Formation::all();
        return view('blog.layouts.index', compact('skills'));
    }
}
