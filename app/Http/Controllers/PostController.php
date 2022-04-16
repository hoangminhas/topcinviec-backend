<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Business_categories;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function employers()
    {
        $posts = $this->postService->getAll();
        return view('posts.employers',compact('posts'));
    }
    public function create()
    {
        $buns = Business_categories::all();
        return view('posts.create',compact('buns'));
    }
    public function store(Request $request)
    {
        $this->postService->store($request);
        return redirect()->route('posts.index');
//        return response()->json("Success",201);

    }

    public function edit($id)
    {
        $buns = Business_categories::all();
        $post = $this->postService->getById($id);
        return view('posts.update',compact('post','buns'));
    }

    public function update($id , Request $request)
    {
        $this->postService->update($id,$request);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $this->postRepository->deleteById($id);
        return redirect()->route('posts.employers');
    }


}
