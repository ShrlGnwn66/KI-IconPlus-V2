<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumPageController extends Controller
{
    public function home (){
        return view ('premiumpage.premiumpage');
    }
    public function internships (){
        return view ('premiumpage.pages.internships.internships');
    }
    public function guestTeacher (){
        return view ('premiumpage.pages.teacher_examiner.guestTeacher');
    }
    public function ukkExaminer (){
        return view ('premiumpage.pages.teacher_examiner.ukkExaminer');
    }
    public function jobVacancy (){
        return view ('premiumpage.pages.pengumuman.jobVacancy');
    }
    public function internVacancy (){
        return view ('premiumpage.pages.pengumuman.internVacancy');
    }
    public function eduTrip (){
        return view ('premiumpage.pages.kunjungan_industri.eduTrip');
    }
    public function additionalServices (){
        return view ('premiumpage.pages.layanan_penunjang.additionalServices');
    }
    
}
