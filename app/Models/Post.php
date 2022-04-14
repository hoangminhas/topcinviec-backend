<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $fillable = [
        'title',
        'content',
        'salary',
        'job_type',
        'job_level',
        'quantity',
        'gender',
        'experience',
        'posting_start',
        'posting_end'
    ];
}
