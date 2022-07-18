<?php

namespace App\Http\Controllers\Admin\brands;

use App\Http\Controllers\Admin\FileUploadController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addBrands;
use App\Models\admin\brands\BrandsModel;


class BrandsController extends Controller
{
    //

    //
    public $brands;
    public $path_base;
    public $fileUploadController;
    public $array_size;


    public function __construct()
    {
        $this->fileUploadController = new FileUploadController();
        $this->brands = new BrandsModel();

        $this->array_size=[
            'small' => '200, 100',
        ];
        $this->path_base = '/images/brands/';
    }

    public function index()
    {
        $listBrands = $this->brands->getAll();

        return view("admin.brands.list", compact('listBrands'));
    }

    // thêm mới
    public function view_add(){
        return view("admin.brands.add");
    }


    public function add(addBrands $request){
        $newBrand = $this->brands;
        $newBrand->name = $request->name;

        $newBrand->alias = str_slug($request->name,'-');
        if($request->alias){
            $newBrand->alias = str_slug($request->alias, '-');
        }

        $newBrand->link = $request->link;
        $newBrand->ordering = $request->ordering;
        $newBrand->published = $request->published;
        $newBrand->target = $request->target;
        $newBrand->brief = $request->brief;


        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $newBrand->image = $file_path;
        }


        $newBrand->save();
        return redirect()->route('admin_brands')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {

        $detail = $this->brands::findOrFail($id);

        return view('admin.brands.edit', compact('detail'));
    }


    public function update(addBrands $request, $id){

        $detail = $this->brands::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->link = $request->link;
        $detail->ordering = $request->ordering;
        $detail->published = $request->published;
        $detail->target = $request->target;
        $detail->brief = $request->brief;

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $detail->image = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_brands')->with('success', 'Edit ' . $request->name . ' successful!');
    }
}
