<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latian extends Model
{
    use HasFactory;
    protected $table = 'latian';
    protected $fillable = [
        'name',
        'email',
        'date',
        'referral'
    ];
}
