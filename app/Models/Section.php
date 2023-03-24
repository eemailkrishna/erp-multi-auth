<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;
    // public function class(){
    //     return $this->hasOne('App\Models\classes', 'class_id');
    // }

    public function class()
    {
        return $this->belongsTo('App\Models\Classes','class_id');
    }

    
}
