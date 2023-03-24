<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostalRoomDetail extends Model
{
    use HasFactory;

    public function hostal() {
        return $this->belongsTo(Hostal::class);
    }

}
