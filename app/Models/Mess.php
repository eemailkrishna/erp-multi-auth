<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mess extends Model
{
    use HasFactory;

    public  $table = 'Mess';


    public function hostal()
    {
        return $this->belongsTo('App\Models\Hostal', 'hostal_id','id');
    }
}
