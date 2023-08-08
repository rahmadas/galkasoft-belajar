<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'make',
        'model',
        'year',
        'capacity',
        'status',
        'price'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
