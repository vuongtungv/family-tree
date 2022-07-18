<?php

namespace App\Http\Controllers\Admin\menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addMenu;
use App\Models\admin\menus\MenuGroupModel;
use App\Models\admin\menus\MenuModel;
use App\Http\Controllers\Admin\FileUploadController;
//use test\Mockery\MockingVariadicArgumentsTest;


class MenuController extends Controller
{
    //
    public $menu;
    public $menu_group;
    public $path_base;
    public $fileUploadController;

    public function __construct()
    {
        $this->fileUploadController = new FileUploadController();
        $this->menu = new MenuModel();
        $this->menu_group = new MenuGroupModel();
        $this->path_base = '/images/menu/';
    }

    public function index()
    {
        $listMenu = $this->menu->getAll();
        $parent_name = array();
        foreach ($listMenu as $key => $item){
            if($item->parent_id){
                $detailMenu =  MenuModel::findOrFail($item->parent_id);
                $parent_name[$key] = $detailMenu->name;
            }
        }

        return view("admin.menu.list", compact('listMenu', 'parent_name'));
    }



    public function view_add(){
        $listMenu = $this->menu->getAll();
        $listMenuGroup = $this->menu_group->getAll();
        return view("admin.menu.add", compact('listMenu','listMenuGroup'));
    }



    public function add(addMenu $request){
        $newMenu = $this->menu;
        $newMenu->name = $request->name;

        $newMenu->alias = str_slug($request->name,'-');
        if($request->alias){
            $newMenu->alias = str_slug($request->alias, '-');
        }

        $newMenu->published = $request->published;
        $newMenu->ordering = $request->ordering;
        $newMenu->target = $request->target;
        $newMenu->group_id = $request->group_id;
        $newMenu->brief = $request->brief;
        $newMenu->link = $request->link;

        if($request->parent_id){
            $newMenu->parent_id = $request->parent_id;
            $detailMenu =  MenuModel::findOrFail($request->parent_id);
            $newMenu->level = $detailMenu->level + 1;
            $newMenu->list_parent = $detailMenu->list_parent.$detailMenu->id.',';
        }else{
            $newMenu->level = 0;
            $newMenu->list_parent = ',';
        }


        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);

            $newMenu->image = $file_path;
        }
        if ($request->hasFile('icon')) {

            $icon = $request->file('icon');

            $file_path = $this->fileUploadController->uploadImage($icon, $this->path_base);

            $newMenu->icon = $file_path;
        }


        $newMenu->save();
        return redirect()->route('admin_menu')->with('success', 'Add ' . $request->name . ' successful!');
    }



    public function view_edit($id)
    {
        $listMenu = $this->menu->getAll();
        $listMenuGroup = $this->menu_group->getAll();



        $detail = $this->menu::findOrFail($id);

        return view('admin.menu.edit', compact('detail', 'listMenu', 'listMenuGroup'));
    }



    public function update(addMenu $request, $id){

        $detail = $this->menu::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }
        $detail->published = $request->published;
        $detail->ordering = $request->ordering;
        $detail->target = $request->target;
        $detail->group_id = $request->group_id;
        $detail->brief = $request->brief;
        $detail->link = $request->link;


        if($request->parent_id){
            $detail->parent_id = $request->parent_id;
            $detailMenu =  MenuModel::findOrFail($request->parent_id);
            $detail->level = $detailMenu->level + 1;
            $detail->list_parent = $detailMenu->list_parent.$detailMenu->id.',';
        }else{
            $detail->level = 0;
            $detail->list_parent = ',';
        }

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);

            $detail->image = $file_path;
        }
        if ($request->hasFile('icon')) {

            $icon = $request->file('icon');

            $file_path = $this->fileUploadController->uploadImage($icon, $this->path_base);

            $detail->icon = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_menu')->with('success', 'Edit ' . $request->name . ' successful!');
    }

}
