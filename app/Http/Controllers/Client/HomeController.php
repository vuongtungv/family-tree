<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\brands\BrandsController;
use App\Http\Controllers\Client\news\NewsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Client\banners\BannersController;

class HomeController extends Controller
{
    //
    public $bannersController;
    public $newsController;
    public $brandsController;
    public $menus;

    public function __construct()
    {
        $this->bannersController = new BannersController();

        $this->newsController = new NewsController();

        $this->brandsController = new BrandsController();

        $this->menus = new MenusController();
    }


    public function index(){

        $listBanners = '';

        $compact = [
            'listBanners',
        ];

        return view('client.index', compact($compact));
    }
}
