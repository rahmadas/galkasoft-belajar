<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'taks';
    protected $fillable = [
        'project_id',
        'name',
        'descripsion',
        'deadline',
        'status',
        'assigned_to'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function assigned_to()
    {
        // alasan rahmad memberikan belongsToMany karena rahmad ingat kata kak miky,
        // ketika table berelasi many to many maka akan secara otomatis dibuatkan table baru
        return $this->belongsToMany(Assigned_to::class);
    }
}
