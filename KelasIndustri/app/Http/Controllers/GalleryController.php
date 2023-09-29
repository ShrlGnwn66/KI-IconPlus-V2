<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = Gallery::all(); // Gantilah dengan model dan data Anda

        $newsImage = News::all(); // Gantilah dengan model dan data Anda

        return view('welcome', compact('galleryItems', 'newsImage'));
    }
}
