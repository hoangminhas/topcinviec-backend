<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidates';
    protected $fillable = [
        'experience',
        'education',
        'skills',
        'resume',
        'profile_image',
        'user_id',
    ];
}
