<?php

namespace App\Http\Controllers\Client\news;

use App\Http\Controllers\Controller;
use App\Models\client\news\NewsCategoryModel;

class NewsCategoryController extends Controller
{
    //
    public $newsCategoryModel;

    public function __construct()
    {
        $this->newsCategoryModel = new NewsCategoryModel;
    }

}
