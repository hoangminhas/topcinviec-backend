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
        $searchCategory = $request->input('searchCategory');

        $posts = Post::query()->where('province_id','like', "%$searchProvince%")
            ->where('title','like',"%$search%")
            ->where('salary','like',"%$search%")
            ->where('business_category_id', 'like', "%$searchCategory%")
            ->paginate(4);
//        dd($posts);

        return view('posts.list',compact('posts'));
    }
}
