<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Admin\FileUploadController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addCategoryProduct;
use App\Models\admin\products\ProductCategoryModel;
use Illuminate\Http\Request;

class ProductsCategoryController extends Controller
{

    public $path;
    public $fileUploadController;

    public function __construct()
    {
        $this->fileUploadController = new FileUploadController();
        $this->path_base = '/images/products/categories/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productsCategory = new ProductCategoryModel();
        $listCategoryProducts = $productsCategory->getAll();
        return view("admin.products.categories.list", compact('listCategoryProducts'));
    }

    // thêm mới
    public function view_add(){
        $productsCategory = new ProductCategoryModel();
        $listCategoryProducts = $productsCategory->getAll();
        return view("admin.products.categories.add", compact('listCategoryProducts'));
    }

    public function add(addCategoryProduct $request){
        $productsCategory = new ProductCategoryModel();
        $productsCategory->name = $request->name;

        $productsCategory->alias = str_slug($request->name,'-');
        if($request->alias){
            $productsCategory->alias = str_slug($request->alias, '-');
        }

        $productsCategory->published = $request->published;
        $productsCategory->ordering = $request->ordering;

        if($request->parent_id){
            $productsCategory->parent_id = $request->parent_id;
            $detailCategory =  ProductCategoryModel::findOrFail($request->parent_id);
            $productsCategory->level = $detailCategory->level + 1;
            $productsCategory->list_parent = $detailCategory->list_parent.$detailCategory->id.',';
        }else{
            $productsCategory->level = 0;
            $productsCategory->list_parent = ',';
        }


        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);

            $productsCategory->image = $file_path;
        }



        $productsCategory->save();
        return redirect()->route('admin_products_category')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {
        $productsCategory = new ProductCategoryModel();
        $listCategoryProducts = $productsCategory->getAll();

        $detail = ProductCategoryModel::findOrFail($id);

        return view('admin.products.categories.edit', compact('detail', 'listCategoryProducts'));
    }


    public function update(addCategoryProduct $request, $id){

        $detail = ProductCategoryModel::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }
        $detail->published = $request->published;
        $detail->ordering = $request->ordering;

        if($request->parent_id){
            $detail->parent_id = $request->parent_id;
            $detailCategory =  ProductCategoryModel::findOrFail($request->parent_id);
            $detail->level = $detailCategory->level + 1;
            $detail->list_parent = $detailCategory->list_parent.$detailCategory->id.',';
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

        $detail->save();
        return redirect()->route('admin_products_category')->with('success', 'Edit ' . $request->name . ' successful!');
    }
}
