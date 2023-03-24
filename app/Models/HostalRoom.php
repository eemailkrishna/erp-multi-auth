<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hostal;

class HostalRoom extends Model
{
    use HasFactory;
// public function hostel_list(){
//         return $this->belongsToMany(HostalRoom::class, 'hostal_id', 'id');
// }
 public function hostel(){
        return $this->belongsToMany(Hostal::class,'hostal_id','id');
    }
    // public function hostel_room(){
    //     return $this->hasOne('App\Models\HostalRoom', 'hostal_id');
    // }

        public function hostal()
        {
        return $this->belongsTo('App\Models\Hostal', 'hostal_id');
        }


}
