<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\BaseRepository;
use App\Repositories\impl\PostInterface;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;

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

    public function store($request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->salary = $request->salary;
        $post->job_type = $request->job_type;
        $post->job_level = $request->job_level;
        $post->quantity = $request->quantity;
        $post->gender = $request->gender;
        $post->experience = $request->experience;
        $post->posting_start = $request->posting_start;
        $post->posting_end = $request->posting_end;
        $post->status_id = $request->status ?? 1;
        $post->user_id = Auth::user()->id;
        $post->save();

    }

    public function update($id, $request)
    {
        // TODO: Implement update() method.
    }
}
