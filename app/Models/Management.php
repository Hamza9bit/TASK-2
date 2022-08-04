<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'Address', 'Phone', 'job_title', 'grade', 'comment', 'Report1', 'Report2','Report3','Report4','Report5'
    ];
}
