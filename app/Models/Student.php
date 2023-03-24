<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student extends Model
{
    use HasFactory;

   

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }


    public function class()
    {
        return $this->belongsTo('App\Models\Classes','class_id','id');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section','section_id','id');
    }



    public function admission()
    {
        return $this->belongsTo('App\Models\Admission_form','admission_id');
    }


}
