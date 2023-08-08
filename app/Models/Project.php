<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'client_id',
        'name',
        'start_date',
        'end_date',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function task()
    {
        // disini dimana table yang berhungan many to many anatara table project dengan
        // table task .
        
        return $this->belongsToMany(Task::class);
    }
}
