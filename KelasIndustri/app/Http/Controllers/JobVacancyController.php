<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobVacancy;

class JobVacancyController extends Controller
{
    public function job() {
        $jobVacancy = JobVacancy::all();

        return view('premiumpage.pages.pengumuman.jobVacancy' , compact('jobVacancy'));
    }
}
