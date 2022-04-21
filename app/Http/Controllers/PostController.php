<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\BusinessCategory;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        if ($posts) {
            return response()->json([
                'success' => true,
                'data' => $posts,
                'msg' => 'get all posts!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'get posts fail'
            ]);
        }
//        return view('posts.list',compact('posts'));
//        return response()->json($posts,201);
//                return response()->json("Success",201);
    }


    public function indexOfAdmin()
    {
        $posts = $this->postService->getAll();
        return view('backend.posts.list', compact('posts'));
    }


    public function detail($id)
    {
        $post = $this->postService->getById($id);
        if ($post) {
            return response()->json([
                'success' => true,
                'data' => $post,
                'msg' => 'get detail post!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'get detail fail'
            ]);
        }
//        return response()->json($post,201);
//        return view('posts.detail', compact('post'));
    }


    public function getAllPostOfRecruiter($id)
    {
        $posts = $this->postService->getAllPostOfUser($id);
        if ($posts) {
            return response()->json([
                'success' => true,
                'data' => $posts,
                'msg' => 'get all posts!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'get posts fail'
            ]);
//        return view('posts.recruiters',compact('posts'));
        }
    }

    public function create()
    {
        $buns = BusinessCategory::all();
        return view('posts.create', compact('buns'));
    }


    public function store(PostRequest $request)
    {
        $this->postService->store($request);
        return redirect()->route('posts.index');
//        return response()->json("Success",201);
    }


    public function edit($id)
    {
        $buns = BusinessCategory::all();
        $post = $this->postService->getById($id);
        return view('posts.update', compact('post', 'buns'));
    }

    public function update($id, PostRequest $request)
    {
        $this->postService->update($id, $request);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $this->postRepository->deleteById($id);
        return redirect()->route('posts.employers');
    }


}
