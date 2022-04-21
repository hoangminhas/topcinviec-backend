<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Kjmtrue\VietnamZone\Models\Province;

class SearchController extends Controller
{
    public function searchJob(Request $request)
    {
        $search = $request->input('search');
        $searchProvince = $request->input('province_id');

        $posts = Post::query()->where('title','like',"%{$search}%")
            ->where('province_id', 'like', "{$searchProvince}")
            ->orWhere('salary','like',"%$search%")
            ->get();
//        dd($posts);
        return view('posts.list',compact('posts'));
    }
}
