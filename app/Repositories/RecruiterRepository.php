<?php

namespace App\Repositories;

use App\Models\Recruiter;
use App\Repositories\impl\BaseInterface;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class RecruiterRepository extends BaseRepository implements BaseInterface
{
    public function getModel()
    {
        return Recruiter::class;
    }
    public function getAll()
    {
        $posts = Recruiter::paginate(4);

        return $posts;
    }
}
