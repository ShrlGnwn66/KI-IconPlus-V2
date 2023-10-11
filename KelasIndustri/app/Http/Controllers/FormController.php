<?php

namespace App\Http\Controllers;

use App\Models\FormInternTeacher;
use App\Models\FormPkl;
use App\Models\FormUkkExaminer;
use App\Models\FormGuestTeacher;
use Illuminate\Http\Request;
use Illuminate\HTTP\UploadedFile;


class FormController extends Controller
{
    //Form PKL
    public function pkl (){
        return view ('premiumpage.pages.form.pkl');
    }
    public function pkl2 (){
        return view ('premiumpage.pages.form.pkl2');
    }

    // Data Preview Form 1
    public function Up (Request $request) {
        // Reset Session
        if ($request->has('reset')) {
            // Hapus data preview dari session
            session()->forget('data_preview');

            return redirect('/pkl');
        }

        // Validasi data dari form pertama
        $validatedData = $request->validate([
            'participant_name' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'nisnim' => 'required',
        ]);

        // Data dari form pertama
        $data = [
            'participant_name' => $validatedData['participant_name'],
            'gender' => $validatedData['gender'],
            'department' => $validatedData['department'],
            'nisnim' => $validatedData['nisnim'],
        ];

        // Simpan data preview ke session
        $request->session()->push('data_preview', $data);

        // Redirect kembali ke form pertama atau form kedua
        return redirect('/pkl');
    }

    public function upFormKedua(Request $request) {
        // validasi data
        $validatedData = $request->validate([
            'agency_name' => 'required',
            'placement' => 'required',
            'start_intern_period' => 'required',
            'end_intern_period' => 'required',
            'responsible_teacher' => 'required',
            'responsible_contact' => 'required',
            'apply_letter' => 'required',
        ]);

        // ambil data form kedua
        $agencyName = $request->input('agency_name');
        $placement = $request->input('placement');
        $startInternPeriod = $request->input('start_intern_period');
        $endInternPeriod = $request->input('end_intern_period');
        $responsibleTeacher = $request->input('responsible_teacher');
        $responsibleContact = $request->input('responsible_contact');
        $applyLetter = $request->file('apply_letter');

        // Simpan file yang di Unggah
        $name = $applyLetter->getClientOriginalName();
        $applyLetter->storeAs('files', $name);
        $link = 'files/' . $name;

        // ambil data session form pertama
        $Preview = session('data_preview') ?? [];
        $combineData=[];

        // Loop untuk mendapat semua data
        foreach ($Preview as $siswa) {
                $combineData[] = array_merge($siswa, [
                    'agency_name' => $agencyName,
                    'placement' => $placement,
                    'start_intern_period' => $startInternPeriod,
                    'end_intern_period' => $endInternPeriod,
                    'responsible_teacher' => $responsibleTeacher,
                    'responsible_contact' => $responsibleContact,
                    'apply_letter' => $link,
            ]);
        }

        // Simpan data ke model
        foreach ($combineData as $data) {
            $model = new FormPkl;
            $model->fill($data);
            $model->save();
        }

        // Hapus session
        session()->forget('data_preview');
        return redirect('/pkl')->with('success', 'Data anda berhasil disimpan');

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
    public function upDataSession(Request $request)
    {
        // Reset Session
        if ($request->has('reset')) {
            // Hapus data preview dari session
            session()->forget('data_preview');

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

    public function storeFormKedua(Request $request)
{
    // Validasi data dari form kedua
    $validatedData = $request->validate([
        'agency_name' => 'required',
        'placement' => 'required',
        'start_intern_period' => 'required',
        'end_intern_period' => 'required',
        'responsible_teacher' => 'required',
        'responsible_contact' => 'required',
        'apply_letter' => 'required',
    ]);

    // Mengambil data dari form kedua
    $agencyName = $request->input('agency_name');
    $placement = $request->input('placement');
    $startInternPeriod = $request->input('start_intern_period');
    $endInternPeriod = $request->input('end_intern_period');
    $responsibleTeacher = $request->input('responsible_teacher');
    $responsibleContact = $request->input('responsible_contact');
    $applyLetter = $request->file('apply_letter');

    // Menyimpan file yang diunggah
    $name = $applyLetter->getClientOriginalName();
    $applyLetter->storeAs('files', $name);
    $link = 'files/' . $name;

    // Mengambil data dari session form pertama
    $dataPreview = session('data_preview') ?? [];
    $combinedData=[];

    // Loop melalui setiap data siswa dari form pertama
    foreach ($dataPreview as $siswa) {
        $combinedData[] = array_merge($siswa, [
            'agency_name' => $agencyName,
            'placement' => $placement,
            'start_intern_period' => $startInternPeriod,
            'end_intern_period' => $endInternPeriod,
            'responsible_teacher' => $responsibleTeacher,
            'responsible_contact' => $responsibleContact,
            'apply_letter' => $link,
        ]);
    }

    // Simpan data ke dalam model
    foreach ($combinedData as $data) {
        $model = new FormInternTeacher;
        $model->fill($data);
        $model->save();
    }

    // Hapus data session setelah di save
    session()->forget('data_preview');

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
