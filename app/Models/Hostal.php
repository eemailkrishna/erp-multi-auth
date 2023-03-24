<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HostalRoomDetail;

class Hostal extends Model
{
    use HasFactory;


public function hostalroom() {
    return $this->hasMany(HostalRoomDetail::class);
}

}
