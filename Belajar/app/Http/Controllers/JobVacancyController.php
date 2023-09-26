<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobVacancy;

class JobVacancyController extends Controller
{
    // public function show($id) {
    //     // Ambil data dari model berdasarkan id
    //     $jobVacancy = JobVacancy::find($id);

    //     // Memisahkan text di job_description berdasarkan koma.
    //     $jobDescription = $jobVacancy->job_description;
    //     $jobDescriptionArray = explode(', ', $jobDescription);

    //     // Memisahkan text di qualifications berdasarkan koma.
    //     $qualifications = $jobVacancy->qualifications;
    //     $qualificationsArray = explode(', ', $qualifications);

    //     // mengirim data ke tampilan
    //     return view('premiumpage.pages.pengumuman.jobVacancy', compact('jobVacancy', 'jobDescriptionArray', 'qualificationsArray'));
    // }

    public function job() {
        $jobVacancy = JobVacancy::all();

        // // Memisahkan Job description dengan koma
        // $jobDescription = $jobVacancy->job_description;
        // $jobDescriptionArray = explode (', ', $jobDescription);

        // // Memisahkan qualifications dengan koma
        // $qualifications = $jobVacancy->qualifications;
        // $qualificationsArray = explode (', ', $qualifications);

        return view('premiumpage.pages.pengumuman.jobVacancy' , compact('jobVacancy'));
    }
}
