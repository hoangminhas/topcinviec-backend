<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Kjmtrue\VietnamZone\Models\Province;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
class SearchController extends Controller
{
    public function searchJob(Request $request)
    {
        $search = $request->input('search');
        $searchProvince = $request->input('province_id');

        $posts = Post::query()->orwhere('province_id','like', "%$searchProvince%")
            ->where('title','like',"%$search%")
            ->orWhere('salary','like',"%$search%")
            ->paginate(4);
//        dd($posts);
        return view('posts.list',compact('posts'));
    }
}
