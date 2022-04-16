<?php

namespace App\Services;

use App\Models\BusinessCategory;

class HomeService extends BaseService
{
    public $businessCategories;
    public function __construct(BusinessCategory $businessCategories)
    {
        $this->businessCategories = $businessCategories;
    }

    public function getAllBusinessCategory()
    {
        return $this->businessCategories::all();
    }
}
