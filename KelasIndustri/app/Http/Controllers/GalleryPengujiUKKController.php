<?php

namespace App\Http\Controllers;
use App\Models\GalleryPengujiUKK;
use Illuminate\Http\Request;

class GalleryPengujiUKKController extends Controller
{
    public function galleryPengujiUKK() {
        $galleryPengujiUKKItems = GalleryPengujiUKK::all();

        return view('premiumpage.pages.teacher_examiner.ukkExaminer', compact('galleryPengujiUKKItems'));
    }
}
