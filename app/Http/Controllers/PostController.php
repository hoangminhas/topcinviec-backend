<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAll();
        return response()->json($posts,201);
    }

    public function store(Request $request)
    {
        $this->postService->store($request);
        return response()->json("Success",201);

    }
}
