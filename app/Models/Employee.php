<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function project_employee()
    {
        return $this->hasMany(ProjectEmployee::class);
    }

    public function employeeskill()
    {
        return $this->hasMany(EmployeeSkill::class);
    }
}
