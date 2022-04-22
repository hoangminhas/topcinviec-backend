<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\BusinessCategory;
use App\Models\Post;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kjmtrue\VietnamZone\Models\Province;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

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


        $business_categories = BusinessCategory::all();
//        $recent_posts = $this->postService->getSomeNewest();

        return view('posts.list', compact('posts', 'business_categories'));
        //        if($posts) {
//            return response()->json([
//               'success'=> true,
//               'data'=> $posts,
//                'msg'=> 'get all posts!'
//            ]);
//        } else {
//            return response()->json([
//                'success'=> false,
//                'msg'=> 'get posts fail'
//            ]);
//        }
//        return response()->json($posts,201);
//                return response()->json("Success",201);
    }

    public function indexOfAdmin()
    {
        $posts = $this->postService->getAll();
        return view('backend.posts.list', compact('posts'));
    }

    public function adminPostDelete($id)
    {
        $this->postRepository->deleteById($id);
        return redirect('dashboard');
    }

    public function detail($id)
    {
        $post = $this->postService->getById($id);
//        return response()->json($post,201);

        return view('posts.detail', compact('post'));
    }

    public function employers()
    {
        $posts = $this->postService->getAll();
        return view('posts.recruiters', compact('posts'));
    }

    public function create()
    {
        $buns = BusinessCategory::all();
        $provinces = Province::all();
        return view('posts.create', compact('buns', 'provinces'));
    }

    public function store(PostRequest $request)
    {
        $this->postService->store($request);
        $provinces = Province::all();
//        toastr()->success('Success create new post!');
        return redirect()->route('posts.employers', compact('provinces'));
//        return response()->json("Success",201);

    }

    public function edit($id)
    {
        $buns = BusinessCategory::all();
        $provinces = Province::all();
        $post = $this->postService->getById($id);
        return view('posts.update', compact('post', 'buns', 'provinces'));
    }

    public function update($id, PostRequest $request)
    {
        $this->postService->update($id, $request);
        $provinces = Province::all();
        return redirect()->route('posts.employers', compact('provinces'));
    }

    public function destroy($id)
    {
        $this->postRepository->deleteById($id);
        return redirect()->route('posts.employers');
    }


}
