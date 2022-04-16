<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\RecruiterRepository;
use App\Services\RecruiterService;
use Illuminate\Http\Request;
use App\Models\Business_categories;


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
        $buns = Business_categories::all();

        $user = User::all();
        return view('recruiters.create', compact('user', 'buns'));
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
        $user = User::all();
        $recruiter = $this->recruiterService->getById($id);
        return view('recruiters.update', compact('recruiter', 'user'));
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
