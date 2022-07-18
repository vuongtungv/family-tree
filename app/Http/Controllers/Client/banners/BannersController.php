<?php

namespace App\Http\Controllers\Client\banners;

use App\Http\Controllers\Controller;
use App\Models\client\banners\BannersModel;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    //

    public $bannersModel;

    public function __construct()
    {
        $this->bannersModel = new BannersModel();
    }

    public function getBanners($category_id){
        $listBanners = $this->bannersModel->getBanners($category_id);
        return $listBanners;
    }
}
