<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ClassworkController;
use App\Http\Controllers\HomeworkController;

use Laravel\Sanctum\HasApiTokens;



class Classwork extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'classworks';
    // public function classes()
    // {
    //     return $this->hasOne('App\Models\Classes', 'id','class_id');
    // }
    // public function section()
    // {
    //     return $this->hasOne('App\Models\Section', 'id','section_id');
    // }
    // public function subject()
    // {
    //     return $this->hasOne('App\Models\Subject', 'id','subject_id');
    // }
}