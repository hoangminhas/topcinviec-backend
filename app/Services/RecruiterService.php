<?php

namespace App\Services;

use App\Models\Recruiter;
use App\Repositories\BaseRepository;
use App\Repositories\impl\RecruiterInterface;
use App\Repositories\RecruiterRepository;
use Illuminate\Support\Facades\Auth;


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
        $request->validate([
            'profile_image' => 'required',
            'banner_image'  => 'required',
            'company_name'  => 'required',
        ]);
        $recruiter = new Recruiter();
        $recruiter->company_name = $request->company_name;
        $recruiter->description = $request->description;
        $recruiter->company_address = $request->company_address;
        $recruiter->office = $request->office;
        $recruiter->employee = $request->employee;
        $recruiter->profile_image = $request->profile_image;
        $recruiter->banner_image = $request->banner_image;
        $recruiter->user_id = $request->user_id;
        $recruiter->status_id = $request->status_id;
        $recruiter->business_category_id = $request->business_category_id;
        if ($request->hasFile('profile_image')) {
            $get_image = $request->profile_image;
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('image'), $new_image);
            $recruiter->profile_image = $new_image;
        }
        if ($request->hasFile('banner_image')) {
            $get_image = $request->banner_image;
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('image', $new_image);
            $recruiter->banner_image = $new_image;
        }
        $recruiter->save();
    }
    public function update($id, $request)
    {
        $request->validate([
            'profile_image' => 'required',
            'banner_image' => 'required',
            'company_name' => 'required',
        ]);

        $recruiter = $this->recruiterRepository->getById($id);
        $recruiter->company_name = $request->company_name;
        $recruiter->description = $request->description;
        $recruiter->company_address = $request->company_address;
        $recruiter->office = $request->office;
        $recruiter->employee = $request->employee;
        $recruiter->profile_image = $request->profile_image;
        $recruiter->banner_image = $request->banner_image;
        $recruiter->user_id = $request->user_id;
        $recruiter->status_id = $request->status_id;
        $recruiter->business_category_id = $request->business_category_id;

        if ($request->hasFile('profile_image')) {
            $get_image = $request->profile_image;
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('image'), $new_image);
            $recruiter->profile_image = $new_image;
        }
        if ($request->hasFile('banner_image')) {
            $get_image = $request->banner_image;
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('image', $new_image);
            $recruiter->banner_image = $new_image;
        }
            $recruiter->save();
    }
    public function getById($id)
    {
        return $this->recruiterRepository->getById($id);
    }
}
