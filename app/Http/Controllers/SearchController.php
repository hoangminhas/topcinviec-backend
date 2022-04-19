<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchJob(Request $request)
    {
        $search = $request->input('search');
        $posts = Post::query()->where('title','like',"%{$search}%")
            ->orWhere('salary','like',"%{$search}%")
            ->get();
        dd($posts);
        return view('index',compact('posts'));
    }
}
