<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\impl\BaseInterface;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class PostRepository extends BaseRepository implements BaseInterface
{

    public function getModel()
    {
        return Post::class;
    }

    public function getAll()
    {
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
//            ->get(['posts.*', 'users.name'])
            ->paginate(4);

        return $posts;
    }

    public function getSomeNewest()
    {
//        return $this->model::all()->sortByDesc('id')->values();
        return $this->model::latest()->take(4)->get();
    }
}
