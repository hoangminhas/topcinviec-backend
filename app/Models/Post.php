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
        'province_id',
        'experience',
        'posting_start',
        'posting_end',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }
}
