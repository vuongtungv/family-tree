<?php

namespace App\Http\Controllers\Client\brands;

use App\Http\Controllers\Controller;
use App\Models\client\brands\BrandsModel;

class BrandsController extends Controller
{
    //
    public $brands;

    public function __construct()
    {
        $this->brands = new BrandsModel();
    }

    /**
     *
     * danh sách brands ở trang chủ
     *
     **/
    public function getBrandsHome(){
        $list = $this->brands->getBrandsHome();
        return $list;
    }
}
