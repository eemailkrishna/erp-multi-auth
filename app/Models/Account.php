<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Account extends Model
{
    use HasApiTokens, HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    
    
}