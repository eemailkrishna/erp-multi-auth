<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class AccountInfo extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'account_info';

    public function user()
    {
        return $this->belongsTo('App\Models\User','cust_name');
    }

    public function officeAccount()
    {
        return $this->belongsTo('App\Models\User','office_account');
    }

    public function addres()
    {
        return $this->belongsTo('App\Models\Address','address');
    }
}