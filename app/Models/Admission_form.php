<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admission_form extends Model
{
    use HasFactory;
    
    public function admission_form()
    {
        return $this->belongsToMany(Admission_form::class, 'user_id', 'id');
    }
     public function admission()
     {
        return $this->belongsTo('App\Models\Admission_form', 'id');
     }
}
