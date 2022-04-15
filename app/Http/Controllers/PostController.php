<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    protected $postRepository;
    public function __construct(PostService $postService, PostRepository $postRepository)
    {
        $this->postService = $postService;
        $this->postRepository = $postRepository;
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

    public function detail($id)
    {
        $post = $this->postService->getById($id);
        return view('posts.detail', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(PostRequest $request)
    {
        $this->postService->store($request);
        return redirect()->route('posts.index');
//        return response()->json("Success",201);

    }

    public function edit($id)
    {
        $post = $this->postService->getById($id);
        return view('posts.update',compact('post'));
    }

    public function update($id , PostRequest $request)
    {
        $this->postService->update($id,$request);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $this->postRepository->deleteById($id);
        return redirect()->route('posts.index');
    }


}
