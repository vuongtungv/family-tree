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

        $listBanners = $this->bannersController->getBanners(1);

        $oneBanner = $this->bannersController->getBanners(2);

        $bannersSelling = $this->bannersController->getBanners(3);

        $newsHome = $this->newsController->getNewsHome();

        $brandsHome = $this->brandsController->getBrandsHome();

        $listMenus = $this->menus->getMenusTop();

        $getBannerNewCollection = $this->bannersController->getBanners(4);

        $getBannerWithStyle = $this->bannersController->getBanners(5);

        $getBannerSetStyle = $this->bannersController->getBanners(6);


        $compact = [
            'listBanners',
            'oneBanner',
            'bannersSelling',
            'newsHome',
            'brandsHome',
            'listMenus',
            'getBannerNewCollection',
            'getBannerWithStyle',
            'getBannerSetStyle'
        ];

        return view('client.index', compact($compact));
    }
}
