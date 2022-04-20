<?php

namespace App\Services;

use App\Models\Candidate;
use App\Repositories\BaseRepository;
use App\Repositories\impl\CandidateInterface;
use App\Repositories\CandidateRepository;
use Illuminate\Http\Request;


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
        $request->validate([
           'experience'     => 'required',
           'education'      => 'required',
           'skills'         => 'required',
           'resume'         => 'required',
            'profile_image' => 'required'
        ]);
        $candidate = new Candidate();
        $candidate->experience = $request->experience;
        $candidate->education = $request->education;
        $candidate->profile_image = $request->profile_image;
        $candidate->user_id = $request->user_id;
        $candidate->skills = $request->skills;
        $candidate->resume = $request->resume;
        if ($request->hasFile('resume')) {
            $get_file = $request->resume;
            $get_name_file = $get_file->getClientOriginalName();
            $name_file = current(explode('.', $get_name_file));
            $new_file = $name_file . rand(0, 99) . '.' . $get_file->getClientOriginalExtension();
            $get_file->move(public_path('resumes'), $new_file);
            $candidate->resume = $new_file;
        }
        if ($request->hasFile('profile_image')) {
            $get_image = $request->profile_image;
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('image', $new_image);
            $candidate->profile_image = $new_image;
        }
        $candidate->save();

    }

    public function update($id, $request)
    {
        $request->validate([
            'experience'    => 'required',
            'education'     => 'required',
            'skills'        => 'required',
            'resume'        => 'required',
            'profile_image' => 'required',
            'user_id'       => 'required'
        ]);
        $candidate = $this->candidateRepository->getById($id);
        $candidate->experience = $request->experience;
        $candidate->education = $request->education;
        $candidate->profile_image = $request->profile_image;
        $candidate->user_id = $request->user_id;
        $candidate->skills = $request->skills;
        $candidate->resume = $request->resume;
        if ($request->hasFile('resume')) {
            $get_file = $request->resume;
            $get_name_file = $get_file->getClientOriginalName();
            $name_file = current(explode('.', $get_name_file));
            $new_file = $name_file . rand(0, 99) . '.' . $get_file->getClientOriginalExtension();
            $get_file->move(public_path('resumes'), $new_file);
            $candidate->resume = $new_file;
        }
        if ($request->hasFile('profile_image')) {
            $get_image = $request->profile_image;
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('image', $new_image);
            $candidate->profile_image = $new_image;
        }
        $candidate->save();
    }


    public function getById($id)
    {
        return $this->candidateRepository->getById($id);
    }
}
