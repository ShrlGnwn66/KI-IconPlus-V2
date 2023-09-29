<?php

namespace App\Http\Controllers;

use App\Models\FormInternTeacher;
use App\Models\FormPaidIntern;
use App\Models\FormUkkExaminer;
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
    //form magang
    public function magangDibayar (){
        return view ('premiumpage.pages.form.magangDibayar');
    }
    public function magang(Request $request){
        $validateData = $request->validate([
            'agency_name' => 'required',
            'participant_name'=> 'required',
            'department' => 'required',
            'graduation_year' => 'required',
            'laptop_device' => 'required',
            'driver_license' => 'required',
            'apply_letter' => 'required'
        ]);

        // Menyimpan file yang diunggah
        $file = $request->file('apply_letter');
        $name = ''. $file->getClientOriginalName();
        $file->storeAs('files', $name);
        $link = 'files/' .$name;

        $validateData['apply_letter'] = $link;



        FormPaidIntern::create($validateData);

        session()->flash('success', 'Data anda berhasil disimpan');

        return redirect('magangDibayar');
    }
    //form guru magang
    public function guruMagang (){
        return view ('premiumpage.pages.form.guruMagang');
    }

    public function guru(Request $request){
        // return $request->all();
        $validateGuru = $request->validate([
            'agency_name' => 'required',
            'participant_name' => 'required',
            'nip' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'start_intern_period' => 'required',
            'end_intern_period' => 'required',
            'responsible_teacher' => 'required',
            'responsible_contact' => 'required',
            'apply_letter' => 'required',
        ]);
         // Menyimpan file yang diunggah
         $file = $request->file('apply_letter');
         $name = ''. $file->getClientOriginalName();
         $file->storeAs('files', $name);
         $link = 'files/' .$name;

         $validateGuru['apply_letter'] = $link;

        FormInternTeacher::create($validateGuru);

        return redirect('/guruMagang')->with('success', 'Data anda berhasil disimpan');

    }
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
