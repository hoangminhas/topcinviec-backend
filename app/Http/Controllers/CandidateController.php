<?php

namespace App\Http\Controllers;

use App\Services\CandidateService;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    protected $candidateService;
    public function __construct(CandidateService $candidateService)
    {
        $this->candidateService = $candidateService;
    }
    public function index()
    {
        $candidates = $this->candidateService->getAll();
        return view('candidates.list', compact('candidates'));
//        return response()->json($candidates, 200);
    }

    public function store(Request $request)
    {
        $this->candidateService->store($request);
        return response()->json("Success",201);
    }

}
