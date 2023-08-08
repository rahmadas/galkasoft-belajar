<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSkill extends Model
{
    use HasFactory;

    protected $table = 'employee_skills';
    protected $fillable = [
        'employee_id',
        'skill_id'
    ];

    public function employee()
    {
        return $this->belongsToMany(EmployeeSkill::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
