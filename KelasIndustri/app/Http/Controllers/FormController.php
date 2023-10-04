<?php

namespace App\Http\Controllers;

use App\Models\FormInternTeacher;
use App\Models\FormUkkExaminer;
use App\Models\FormGuestTeacher;
use Illuminate\Http\Request;
use Illuminate\HTTP\UploadedFile;


class FormController extends Controller
{
    //form pkl
    public function pkl (){
        return view ('premiumpage.pages.form.pkl');
    }
    public function pkl2 (){
        return view ('premiumpage.pages.form.pkl2');
    }

    //form Guru Tamu
    public function guruTamu (){
        return view ('premiumpage.pages.form.guruTamu');
    }
    public function tamu (Request $request)
    {
        $validateTamu = $request->validate([
            'agency_name' => 'required',
            'subject_exam' => 'required',
            'exam_date' => 'required',
            'exam_time' => 'required',
            'responsible_teacher' => 'required',
            'responsible_contact' => 'required',
            'apply_letter' => 'required',
        ]);

        // Menyimpan file yang diunggah
        $file = $request->file('apply_letter');
        $name = ''. $file->getClientOriginalName();
        $file->storeAs('files', $name);
        $link = 'files/' .$name;

        $validateTamu['apply_letter'] = $link;

       FormGuestTeacher::create($validateTamu);

       return redirect('/guruTamu')->with('success', 'Data anda berhasil disimpan');

    }

    //form guru magang
    public function guruMagang (){
        return view ('premiumpage.pages.form.guruMagang');
    }
    public function guruMagang2 (){
        return view ('premiumpage.pages.form.guruMagang2');
    }

    // data preview with sessions
    public function guru(Request $request)
    {
        // Reset Session
        if ($request->has('reset')) {
            // Hapus data preview dari session
            session()->forget('data_preview');
            // Redirect kembali ke halaman form pertama
            return redirect('/guruMagang');
        }

        // Validasi data dari form pertama
        $validatedData = $request->validate([
            'participant_name' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'nip' => 'required',
        ]);

        // Data dari form pertama
        $data = [
            'participant_name' => $validatedData['participant_name'],
            'gender' => $validatedData['gender'],
            'department' => $validatedData['department'],
            'nip' => $validatedData['nip'],
        ];

        // Simpan data preview ke session
        $request->session()->push('data_preview', $data);

        // Redirect kembali ke form pertama atau form kedua
        return redirect('/guruMagang');
    }




    // public function guru(Request $request){
    //     // return $request->all();
    //     $validateGuru = $request->validate([
    //         'agency_name' => 'required',
    //         'participant_name' => 'required',
    //         'nip' => 'required',
    //         'gender' => 'required',
    //         'department' => 'required',
    //         'start_intern_period' => 'required',
    //         'end_intern_period' => 'required',
    //         'responsible_teacher' => 'required',
    //         'responsible_contact' => 'required',
    //         'apply_letter' => 'required',
    //     ]);
    //      // Menyimpan file yang diunggah
    //      $file = $request->file('apply_letter');
    //      $name = ''. $file->getClientOriginalName();
    //      $file->storeAs('files', $name);
    //      $link = 'files/' .$name;

    //      $validateGuru['apply_letter'] = $link;

    //     FormInternTeacher::create($validateGuru);

    //     return redirect('/guruMagang')->with('success', 'Data anda berhasil disimpan');

    // }
    //form penguji UKK
    public function pengujiUKK (){
        return view ('premiumpage.pages.form.pengujiUKK');
    }
    public function penguji(Request $request){
        // return $request->all();
        $validatePenguji = $request->validate([
            'agency_name' => 'required',
            'subject_exam' => 'required',
            'exam_date' => 'required',
            'exam_time' => 'required',
            'responsible_teacher' => 'required',
            'responsible_contact' => 'required',
            'apply_letter' => 'required',
        ]);
         // Menyimpan file yang diunggah
         $file = $request->file('apply_letter');
         $name = ''. $file->getClientOriginalName();
         $file->storeAs('files', $name);
         $link = 'files/' .$name;

         $validatePenguji['apply_letter'] = $link;

        FormUkkExaminer::create($validatePenguji);

        return redirect('/pengujiUKK')->with('success', 'Data anda berhasil disimpan');

    }
}
