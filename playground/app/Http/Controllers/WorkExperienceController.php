<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function show()
    {
        $data = WorkExperience::getData();

        return view('work-experience', [
            'workExperiences' => $data,
        ]);
    }
}
