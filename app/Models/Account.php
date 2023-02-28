<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;



class Account extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;

    protected $guarded = [];
    // protected $fillable = ['account_id'];
    protected $appends = [];
}
