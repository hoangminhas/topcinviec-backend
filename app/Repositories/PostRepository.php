<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\impl\BaseInterface;

class PostRepository extends BaseRepository implements BaseInterface
{

    public function getModel()
    {
        return Post::class;
    }

    public function getSomeNewest()
    {
//        return $this->model::all()->sortByDesc('id')->values();
        return $this->model::latest()->take(9)->get();
    }
}
