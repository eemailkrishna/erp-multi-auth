<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Sports_Participate extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'sports_participate';

    public function sport()
    {
        return $this->belongsTo('App\Models\Sport','sports_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','student_id');
    }
    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }

    public function class()
    {
        return $this->belongsTo('App\Models\Classes','class_id');
    }
    public function section()
    {
        return $this->belongsTo('App\Models\Section','section_id');
    }
}