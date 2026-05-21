<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Models\EducationHistory;

class ProfileController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $experiences = Experience::all();
        $projects = Project::all();
        $educations = EducationHistory::orderBy('start_year', 'desc')->get();

        return view('welcome', compact('skills', 'experiences', 'projects', 'educations'));
    }
}
