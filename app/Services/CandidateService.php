<?php

namespace App\Services;

use App\Models\Candidate;
use App\Repositories\BaseRepository;
use App\Repositories\impl\CandidateInterface;
use App\Repositories\CandidateRepository;

class CandidateService extends BaseService implements CandidateInterface
{
    public $candidateRepository;
    public function __construct(CandidateRepository $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }

    public function getAll()
    {
        return $this->candidateRepository->getAll();
    }

    public function store($request)
    {
        $candidate = new Candidate();
        $candidate->experience = $request->experience;
        $candidate->education = $request->education;
        $candidate->skills = $request->skills;
        $candidate->resume = $request->resume;
        $candidate->profile_image = $request->profile_image;
        $candidate->user_id = $request->user_id;
        $candidate->save();

    }

    public function update($id, $request)
    {
        // TODO: Implement update() method.
    }
}
