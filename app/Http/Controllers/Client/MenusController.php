<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\client\MenusModel;
use Illuminate\View\View;


class MenusController extends Controller
{
    //
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenusModel();
    }

    public function getMenusTop(){
        $list = $this->menuModel->getMenusTop();
        if($list){
            $listMenus = $this->recursiveMenu($list);

//            return View::make('client.layouts.menu_top')->with('listMenus', $listMenus);

//            view()->composer('client.layouts.menu_top', function($view) {
//                $view->with('listMenus');
//            });
            return $listMenus;
        }
    }




    public function recursiveMenu($list){
        $list_menus = [];
        $child = [];
        foreach ($list as $key => $item){
            if(!$item->parent_id) {
                $item->child = [];
                $list_menus[$item->id] = $item;
            }else{
                $child[] = $item;
            }
        }

        foreach ($child as $cl){
            $list_menus[$cl->parent_id]->child[] = $cl;
        }
        return $list_menus;
    }
}
