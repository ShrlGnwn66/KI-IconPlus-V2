<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class FormInternTeacher extends Model
{
    protected $table = 'form_intern_teacher';

    protected $fillable = [
        'participant_name',
        'gender',
        'department',
        'nip',
        'participant_contact',
        'agency_name',
        'placement',
        'start_intern_period',
        'end_intern_period',
        'responsible_teacher',
        'responsible_contact',
        'apply_letter',
    ];

}
