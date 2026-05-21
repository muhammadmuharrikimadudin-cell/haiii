<?php

namespace App\Http\Controllers;

use App\Models\EducationHistory;

class EducationHistoryController extends Controller
{
    public function index()
    {
        $educations = EducationHistory::orderBy('start_year', 'desc')->get();
        return view('education', compact('educations'));
    }
}