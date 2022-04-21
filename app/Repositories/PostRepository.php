<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\Recruiter;
use App\Models\User;
use App\Repositories\impl\BaseInterface;

class PostRepository extends BaseRepository implements BaseInterface
{

    public function getModel()
    {
        return Post::class;
    }

    public function getAll()
    {
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->get(['posts.*', 'users.name', 'users.address_detail']);
        return $posts;
    }

    public function getById($id)
    {
        $post = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->join('business_categories','posts.business_category_id', '=', 'business_categories.id' )
            ->where('posts.id', $id)
            ->first(['posts.*', 'users.name as userName','users.address_detail',
                'users.phone','users.email','business_categories.name as category']);
        return $post;
    }


//    public function getAllPostOfUser($id)
//    {
//        $user = User::find($id);
//        $posts = $user->posts;
//        return $posts;
//    }


    public function getSomeNewest()
    {
//        return $this->model::all()->sortByDesc('id')->values();
        return $this->model::latest()->take(9)->get();
    }
}
