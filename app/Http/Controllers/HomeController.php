<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use App\Models\Post;
use App\Services\HomeService;
use App\Services\PostService;
use Illuminate\Http\Request;
use Kjmtrue\VietnamZone\Models\Province;

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
        $posts = $this->postService->getSomeNewest();
        $totalPosts = count($this->postService->getAll());
        $provinces = Province::get();
        return view('index', compact(['businessCategory', 'posts', 'totalPosts', 'provinces']));
    }
}
