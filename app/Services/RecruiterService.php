<?php

namespace App\Services;

use App\Models\Recruiter;
use App\Repositories\BaseRepository;
use App\Repositories\impl\RecruiterInterface;
use App\Repositories\RecruiterRepository;

class RecruiterService extends BaseService implements RecruiterInterface
{
    public $recruiterRepository;
    public function __construct(RecruiterRepository $recruiterRepository)
    {
        $this>$this->recruiterRepository = $recruiterRepository;
    }

    public function getAll()
    {
        return $this->recruiterRepository->getAll();
    }
    public function store($request)
    {
        $recruiter = new Recruiter();
        $recruiter->profile_image = $request->profile_image;
        $recruiter->banner_image = $request->banner_image;
        $recruiter->user_id = $request->user_id;
        $recruiter->status_id = $request->status_id;
        $recruiter->business_category_id = $request->business_category_id;
        $recruiter->save();
    }
    public function update($id, $request)
    {
        // TODO: Implement update() method.
    }
}
