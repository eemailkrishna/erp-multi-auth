<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Fee extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'fees';

    // public function student()
    // {
    //     return $this->belongsTo('App\Models\Student','student_id');
    // }

    public function user()
    {
        return $this->belongsTo('App\Models\User','student_id');
    }

}
