<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;
    protected $table = 'recruiters';
    protected $fillable = [
        'company_name',
        'description',
        'company_address',
        'office',
        'employee',
        'profile_image',
        'banner_image',
        'user_id',
        'status_id',
        'business_category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
