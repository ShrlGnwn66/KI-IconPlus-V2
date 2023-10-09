<?php

namespace App\Http\Controllers;
use App\Models\GalleryKunjungan;
use Illuminate\Http\Request;

class GalleryKunjunganController extends Controller
{
    public function galleryKunjungan() {
        $galleryKunjunganItems = GalleryKunjungan::all();

        return view('premiumpage.pages.kunjungan_industri.eduTrip', compact('galleryKunjunganItems'));
    }
}
