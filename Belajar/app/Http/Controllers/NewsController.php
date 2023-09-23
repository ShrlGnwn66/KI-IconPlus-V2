<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function news($id = null)
        {
        // Jika $id tidak null, artinya parameter 'id' telah dikirimkan melalui URL
        if ($id !== null) {
            // Ambil data berita berdasarkan $id dari model atau sumber data Anda
            $newsImage = News::find($id);

            // Kirim data berita ke tampilan
            return view('news', compact('newsImage'));
        }

        // Jika $id null, Anda bisa menampilkan halaman default atau melakukan penanganan lain sesuai kebutuhan.
        return view('news');
    }

}
