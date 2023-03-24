<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'period name',
        'start time',
        'end time',
        'teacher_name',
        'subject_preferred',
        'class_preferred',
        'time_from',
        'time_to',
        'monday_subject_name',
        'monday_teacher_name',
        'tuesday_subject_name',
        'tuesday_teacher_name',
        'wednesday_subject_name',
        'wednesday_teacher_name',
        'thursday_subject_name',
        'thursday_teacher_name',
        'friday_subject_name',
        'friday_teacher_name',
        'saturday_subject_name',
        'saturday_teacher_name',
    ];
    // public function section(){
    //     return $this->hasOne('App\Models\section', 'section_id');
    // }
   
public function section()
{
    return $this->belongsTo('App\Models\Section','section_id');
}

public function class()
{
    return $this->belongsTo('App\Models\Classes','class_id');
}

}
