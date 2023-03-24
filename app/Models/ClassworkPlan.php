<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Controllers\ClassworkPlanController;


class ClassworkPlan extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'classwork_plans';}