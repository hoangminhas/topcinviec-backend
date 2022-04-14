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
        return view('posts.list',compact('posts'));
//        return response()->json($posts,201);
    }

    public function indexOfAdmin()
    {
        $posts = $this->postService->getAll();
        return view('backend.posts.list', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $this->postService->store($request);
        return redirect()->route('posts.index');
//        return response()->json("Success",201);

    }

}
