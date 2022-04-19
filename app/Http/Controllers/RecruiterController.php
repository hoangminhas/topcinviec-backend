<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use App\Models\User;
use App\Repositories\RecruiterRepository;
use App\Services\RecruiterService;
use Illuminate\Http\Request;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\Ward;


class RecruiterController extends Controller
{
    protected $recruiterService;
    protected $recruiterRepository;

    public function __construct(RecruiterService $recruiterService, RecruiterRepository $recruiterRepository)
    {
        $this->recruiterService = $recruiterService;
        $this->recruiterRepository = $recruiterRepository;
    }

    public function index()
    {
        $recruiters = $this->recruiterService->getAll();
//    return $recruiters;
        return view('recruiters.list', compact('recruiters'));
    }

    public function create()
    {
        $buns = BusinessCategory::all();
        $user = User::all();
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();

        return view('recruiters.create', compact('user', 'buns','provinces'));
    }

    public function store(Request $request)
    {
        $this->recruiterService->store($request);
        return redirect()->route('recruiters.index');
//        return response()->json('success', 200);
    }

    public function detail($id)
    {
        $recruiter = $this->recruiterService->getById($id);
        return view('recruiters.detail', compact('recruiter'));
    }

    public function edit($id)
    {
        $user = User::all();
        $recruiter = $this->recruiterService->getById($id);
        return view('recruiters.update', compact('recruiter', 'user'));
//        return response()->json('success', 201);
    }

    public function update(Request $request, $id)
    {
        $this->recruiterService->update($id, $request);
//        return response()->json('success', 200);
        return redirect()->route('recruiters.index');
    }

    public function destroy($id)
    {
        $this->recruiterRepository->deleteById($id);
        return redirect()->route('recruiters.index');
    }
}
