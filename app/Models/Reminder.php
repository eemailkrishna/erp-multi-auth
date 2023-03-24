<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notificable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Controllers\ReminderCotroller;

class Reminder extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'reminders';

}