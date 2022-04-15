<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use App\Models\Post;
use App\Services\HomeService;
use App\Services\PostService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $homeService;
    public $postService;
    public function __construct(HomeService $homeService,
                                PostService $postService)
    {
        $this->homeService = $homeService;
        $this->postService = $postService;
    }

    public function index()
    {
        $businessCategory = $this->homeService->getAllBusinessCategory();
        $posts = $this->postService->getAllDesc();
        $totalPosts = count($posts);
        return view('index', compact(['businessCategory', 'posts', 'totalPosts']));
    }
}
