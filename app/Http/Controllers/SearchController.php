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
        $search = $request->get('search');
        $searchProvince = $request->get('province_id');
        $searchCategory = $request->get('searchCategory');
        $posts = Post::query();
        if ($search)
        {
            $posts->where('title','like',"%$search%" );
        }
        if ($searchProvince)
        {
            $posts->where('province_id','like',"%$searchProvince%");
        }
        if($searchCategory)
        {
            $posts->where('business_category_id','like',"%$searchCategory%");
        }

            $posts = $posts->paginate(4);
//        dd($posts);

        return view('posts.list',compact('posts'));
    }
}
