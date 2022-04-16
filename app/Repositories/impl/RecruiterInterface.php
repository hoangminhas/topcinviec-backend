<?php

namespace App\Repositories\impl;

interface RecruiterInterface
{
    public function store($request);

    public function update($id,$request);
}
