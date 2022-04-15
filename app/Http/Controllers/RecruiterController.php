<?php

namespace App\Http\Controllers;

use App\Repositories\RecruiterRepository;
use App\Services\RecruiterService;
use Illuminate\Http\Request;

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
    return view ('recruiters.list', compact('recruiters'));
    }

    public function create()
    {
        return view('recruiters.create');
    }

    public function store(Request $request)
    {
        $this->recruiterService->store($request);
        return redirect()->route('recruiters.index');
//        return response()->json('success', 200);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $recruiter = $this->recruiterService->getById($id);
        return view('recruiters.update', compact('recruiter'));
//        return response()->json('success', 201);
    }

    public function update(Request $request, $id)
    {
        $this->recruiterService->update($id,$request);
//        return response()->json('success', 200);
        return redirect()->route('recruiters.index');
    }


    public function destroy($id)
    {
        $this->recruiterRepository->deleteById($id);
        return redirect()->route('recruiters.index');
    }
}
