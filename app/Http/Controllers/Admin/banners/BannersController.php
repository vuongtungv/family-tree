<?php

namespace App\Http\Controllers\Admin\banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addBanners;
use App\Models\admin\banners\BannersCategoryModel;
use App\Models\admin\banners\BannersModel;
use App\Http\Controllers\Admin\FileUploadController;


class BannersController extends Controller
{
    //
    public $banners;
    public $path_base;
    public $fileUploadController;
    public $category_banners;
    public $array_size;

    public function __construct()
    {
        $this->fileUploadController = new FileUploadController();
        $this->banners = new BannersModel();
        $this->category_banners = new BannersCategoryModel();

        $this->array_size=[
            'big' => '1920, 940',
            'large' => '1920, 940',
            'small' => '370, 215',
            'new_collection' => '470, 720',
            'with_style' => '670, 345',
            'set_style' => '320, 345',
        ];
        $this->path_base = '/images/banners/banners';
    }

    public function index()
    {
        $listBanners = $this->banners->getAll();
        return view("admin.banners.banners.list", compact('listBanners'));
    }


    // thêm mới
    public function view_add(){

        $listCategoryBanners = $this->category_banners->getAll();

        return view("admin.banners.banners.add", compact('listCategoryBanners'));
    }


    public function add(addBanners $request){
        $newBanner = $this->banners;
        $newBanner->name = $request->name;

        $newBanner->alias = str_slug($request->name,'-');
        if($request->alias){
            $newBanner->alias = str_slug($request->alias, '-');
        }

        $newBanner->link = $request->link;
        $newBanner->ordering = $request->ordering;
        $newBanner->status = $request->status;
        $newBanner->target = $request->target;
        $newBanner->brief = $request->brief;

        if($request->category_id){
            $detailCategory =  BannersCategoryModel::findOrFail($request->category_id);
            $newBanner->category_id = $detailCategory->id;
            $newBanner->category_name = $detailCategory->name;
        }

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $newBanner->image = $file_path;
        }


        $newBanner->save();
        return redirect()->route('admin_banners')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {
        $listCategoryBanners = $this->category_banners->getAll();

        $detail = $this->banners::findOrFail($id);

        return view('admin.banners.banners.edit', compact('detail','listCategoryBanners'));
    }


    public function update(addBanners $request, $id){

        $detail = $this->banners::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->link = $request->link;
        $detail->ordering = $request->ordering;
        $detail->status = $request->status;
        $detail->target = $request->target;
        $detail->brief = $request->brief;

        if($request->category_id){
            $detailCategory =  BannersCategoryModel::findOrFail($request->category_id);
            $detail->category_id = $detailCategory->id;
            $detail->category_name = $detailCategory->name;
        }

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $detail->image = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_banners')->with('success', 'Edit ' . $request->name . ' successful!');
    }
}
