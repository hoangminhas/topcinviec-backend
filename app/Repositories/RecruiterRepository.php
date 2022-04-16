<?php

namespace App\Repositories;

use App\Models\Recruiter;
use App\Repositories\impl\BaseInterface;

class RecruiterRepository extends BaseRepository implements BaseInterface
{
    public function getModel()
    {
        return Recruiter::class;
    }
}
