<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\impl\BaseInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

Paginator::useBootstrap();

class PostRepository extends BaseRepository implements BaseInterface
{

    public function getModel()
    {
        return Post::class;
    }

    public function getAll()
    {
        //$userLogin = Auth::user();
        $posts = Post::with(['user']);
            //->select(['posts.*', 'users.name']);

        return $posts->paginate(4);
    }

    public function getSomeNewest()
    {
//        return $this->model::all()->sortByDesc('id')->values();
        return $this->model::latest()->take(4)->get();
    }
}
