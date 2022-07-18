<?php

namespace App\Http\Controllers\Admin\banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addCategoriesBanners;
use App\Models\admin\banners\BannersCategoryModel;
use App\Http\Controllers\Admin\FileUploadController;

class BannersCategoryController extends Controller
{
    //
    public $banners;
    public $path_base;
    public $fileUploadController;

    public function __construct()
    {
        $this->fileUploadController = new FileUploadController();
        $this->banners = new BannersCategoryModel();
        $this->path_base = '/images/banners/categories';
    }

    public function index()
    {
        $listBanners = $this->banners->getAll();
        return view("admin.banners.categories.list", compact('listBanners'));
    }


    // thêm mới
    public function view_add(){
        return view("admin.banners.categories.add");
    }


    public function add(addCategoriesBanners $request){
        $newBanner = $this->banners;
        $newBanner->name = $request->name;

        $newBanner->alias = str_slug($request->name,'-');
        if($request->alias){
            $newBanner->alias = str_slug($request->alias, '-');
        }

        $newBanner->status = $request->status;
        $newBanner->ordering = $request->ordering;


        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);

            $newBanner->image = $file_path;
        }


        $newBanner->save();
        return redirect()->route('admin_banners_category')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {
        $detail = $this->banners::findOrFail($id);

        return view('admin.banners.categories.edit', compact('detail'));
    }


    public function update(addCategoriesBanners $request, $id){

        $detail = $this->menu::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }
        $detail->status = $request->status;
        $detail->ordering = $request->ordering;




        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);

            $detail->image = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_banners_category')->with('success', 'Edit ' . $request->name . ' successful!');
    }

}
