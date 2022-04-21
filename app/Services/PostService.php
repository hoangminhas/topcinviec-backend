<?php

namespace App\Services;

use App\Models\BusinessCategory;
use App\Models\Post;
use App\Repositories\BaseRepository;
use App\Repositories\impl\PostInterface;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class PostService extends BaseService implements PostInterface
{
    public $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        return $this->postRepository->getAll();
    }

    public function getSomeNewest()
    {
        return $this->postRepository->getSomeNewest();
    }

    public function store($request)
    {
//        dd($request);
        $request->merge(['user_id' => Auth::user()->id]);
        Post::create($request->all());
    }

    public function update($id, $request)
    {
        $post =$this->postRepository->getById($id);
//        dd($post);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->salary = $request->salary;
        $post->job_type = $request->job_type;
        $post->job_level = $request->job_level;
        $post->province_id = $request->province_id;
        $post->quantity = $request->quantity;
        $post->gender = $request->gender;
        $post->experience = $request->experience;
        $post->posting_start = $request->posting_start;
        $post->posting_end = $request->posting_end;
        $post->business_category_id = $request->business_category_id;
//        $post->status_id = $request->status ?? 1;
        $post->user_id = Auth::user()->id;
        $post->save();
    }

    public function getById($id)
    {
        return $this->postRepository->getById($id);
    }
}
