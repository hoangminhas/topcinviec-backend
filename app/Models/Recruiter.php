<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;
    protected $table = 'recruiters';
    protected $fillable = [
        'profile_image',
        'banner_image',
        'user_id',
        'status_id',
        'business_category_id'
    ];
}
