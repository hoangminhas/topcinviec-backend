<?php

namespace App\Http\Controllers;

use App\Services\RecruiterService;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    protected $recruiterService;
    public function __construct(RecruiterService $recruiterService)
    {
        $this->recruiterService = $recruiterService;
    }

    public function index()
    {
        $recruiters = $this->recruiterService->getAll();
        return response()->json($recruiters, 201);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->recruiterService->store($request);
        return response()->json('Success', 201);
    }


    public function show($id)
    {
       //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
