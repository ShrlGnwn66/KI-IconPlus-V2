<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternVacancy;


class InternVacancyController extends Controller
{
    public function internjob() {
        $internVacancy = InternVacancy::all();

        return view('premiumpage.pages.pengumuman.internVacancy' , compact('internVacancy'));
    }
}
