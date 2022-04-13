<?php

namespace App\Services;

use App\Repositories\BaseRepository;
use App\Repositories\PostRepository;

class PostService extends BaseService
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
}
