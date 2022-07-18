<?php

namespace App\Http\Controllers\Client\news;

use App\Http\Controllers\Controller;
use App\Models\client\news\NewsCategoryModel;
use App\Models\client\news\NewsModel;
use test\Mockery\MockingVariadicArgumentsTest;


class NewsController extends Controller
{
    //

    public $newsModel;
    public $newsCategoryModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->newsCategoryModel = new NewsCategoryModel();
    }

    public function index(){
        $listNews = $this->newsModel->getAll();

        $countPage = $this->getCountPage();

        $currentPage = 1;

        $compact = [
            'listNews',
            'currentPage',
            'countPage'
        ];

        return view('client.blogs.home', compact($compact));
    }
    public function indexWithPage($page){
        $listNews = $this->newsModel->getAll($page);
        $countPage = $this->getCountPage();
        $currentPage = $page;
        $compact = [
            'listNews',
            'currentPage',
            'countPage'
        ];

        return view('client.blogs.home', compact($compact));
    }


    /**
     *
     * danh sách tin tức ở trang chủ
     *
    **/
    public function getNewsHome(){
        $listNewsHome = $this->newsModel->getNewsHome();
        return $listNewsHome;
    }


    public function detail($id, $alias){
        $detail = $this->newsModel->getDetail($id);
        $listNewsCategory = $this->newsCategoryModel->getCategory();

        $recentPost = $this->newsModel->getRecentPost($id, $detail->category_id);

        $compact = [
            'detail',
            'listNewsCategory',
            'recentPost'
        ];

        return view("client.blogs.detail", compact($compact));
    }



    public function listByCategory($id, $alias){
        $listNewsCategory = $this->newsCategoryModel->getCategory();

        $list_news = $this->newsModel->getListNewsByIDCategory($id);

        $detailCategory = $this->newsCategoryModel::findOrFail($id);
        $countPage = $this->getCountPage($id);

        $currentPage = 1;

        $compact = [
            'listNewsCategory',
            'list_news',
            'detailCategory',
            'countPage',
            'currentPage'
        ];

        return view('client.blogs.category_list', compact($compact));
    }

    public function listByCategoryWithPage($id, $alias, $page){
        $listNewsCategory = $this->newsCategoryModel->getCategory();

        $list_news = $this->newsModel->getListNewsByIDCategory($id, $page);

        $detailCategory = $this->newsCategoryModel::findOrFail($id);

        $countPage = $this->getCountPage($id);

        $currentPage = $page;

        $compact = [
            'listNewsCategory',
            'list_news',
            'detailCategory',
            'countPage',
            'currentPage'
        ];

        return view('client.blogs.category_list', compact($compact));
    }


    public function getCountPage($category_id = null){
        $countPage = $this->newsModel->getCountPage($category_id);
        return $countPage;
    }
}
