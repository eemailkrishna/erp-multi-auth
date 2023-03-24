<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;
    protected $fillable =[
        'medical_history',
        'student_height',
        'student_weight',
        'checkup_date',
        'hospital_name',
        'doctor_name',
        'checkup_report',
        'blood_group',
        'checkup_bp',
        'checkup_hb',
        'checkup_suger',
        'checkup_hiv',
        'checkup_tb',
        'eye_problem',
        'specs',
        'checkup_discription',
        'checkup_marks',
        
        'fitness_test_date',
        'body_Composition_weight_row_score',
        'body_Composition_height_row_score',
        'cardio_resiratory_endurance_pacer',
        'flexibility_trunk_lift',
        'flexibility_sit_and_reach(L)',
        'flexibility_sit_and_reach(R)',
        'muscular_endurance_curl-ups',
        'muscular_strength_standing_long_jump',
    ];

}
