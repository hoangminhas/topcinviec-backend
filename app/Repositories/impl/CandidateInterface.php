<?php

namespace App\Repositories\impl;

interface CandidateInterface
{
    public function store($request);

    public function update($id,$request);
}
