<?php

namespace App\Repositories;

use App\Models\Candidate;
use App\Repositories\impl\BaseInterface;

class CandidateRepository extends BaseRepository implements BaseInterface
{

    public function getModel()
    {
        return Candidate::class;
    }
}
