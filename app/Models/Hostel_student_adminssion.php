<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel_student_adminssion extends Model
{
    use HasFactory;
    public function hostal()
    {
        return $this->belongsTo('App\Models\Hostal', 'hostal_id');
    }
    public function hostalRoom()
    {
        return $this->belongsTo('App\Models\HostalRoomDetail', 'room_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function class()
    {
        return $this->belongsTo('App\Models\Classes', 'class_id');
    }
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }

    public function hostal_room_details()
    {
        return $this->belongsTo('App\Models\HostalRoomDetail', 'hostal_room_no','hostal_room_no');
    }

}
