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
        $this->recruiterRepository = $recruiterRepository;
    }

    public function getAll()
    {
        return $this->recruiterRepository->getAll();
    }

    public function store($request)
    {
        $recruiter = new Recruiter();
        $recruiter->profile_image = $request->input('profile_image');
        if ($request->hasFile('profile_image'))
        {
            $get_image    = $request->profile_image;
            $get_name_image      = $get_image->getClientOriginalName();
            $name_image          = current(explode('.', $get_name_image));
            $new_image           = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('profile_image', $new_image);
            $recruiter->profile_image   = $new_image;
        }
        $recruiter->banner_image = $request->input('banner_image');
        if ($request->hasFile('banner_image'))
        {
            $get_image    = $request->banner_image;
            $get_name_image      = $get_image->getClientOriginalName();
            $name_image          = current(explode('.', $get_name_image));
            $new_image           = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('banner_image', $new_image);
            $recruiter->banner_image   = $new_image;
        }
        $recruiter->user_id = $request->input('user_id');
        $recruiter->status_id = $request->input('status_id');
        $recruiter->business_category_id = $request->input('business_category_id');
        $recruiter->save();
    }

    public function update($id, $request)
    {
        // TODO: Implement update() method.
    }
}
