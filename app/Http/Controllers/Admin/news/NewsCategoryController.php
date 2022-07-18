<?php

namespace App\Http\Controllers\Admin\news;

use App\Http\Requests\Admin\addCategoryNews;
use App\Models\admin\news\NewsCategoryModel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\FileUploadController;
use test\Mockery\MockingVariadicArgumentsTest;

//use Illuminate\Http\Request;
//use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File;

class NewsCategoryController extends Controller
{
    //
    public $path;
    public $fileUploadController;

    public function __construct()
    {
        $this->fileUploadController = new FileUploadController();
        $this->path_base = '/images/news/categories/';
    }



    public function index()
    {
        $newsCategory = new NewsCategoryModel();
        $listCategoryNews = $newsCategory->getAll();
        return view("admin.news.categories.list", compact('listCategoryNews'));
    }



    // thêm mới
    public function view_add(){
        $newsCategory = new NewsCategoryModel();
        $listCategoryNews = $newsCategory->getAll();
        return view("admin.news.categories.add", compact('listCategoryNews'));
    }

    public function add(addCategoryNews $request){
        $newsCategory = new NewsCategoryModel();
        $newsCategory->name = $request->name;

        $newsCategory->alias = str_slug($request->name,'-');
        if($request->alias){
            $newsCategory->alias = str_slug($request->alias, '-');
        }

        $newsCategory->status = $request->status;
        $newsCategory->ordering = $request->ordering;

        if($request->category_id){
            $newsCategory->category_id = $request->category_id;
            $detailCategory =  NewsCategoryModel::findOrFail($request->category_id);
            $newsCategory->category_name = $detailCategory->name;
            $newsCategory->level = $detailCategory->level + 1;
        }else{
            $newsCategory->level = 0;
        }


        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);

            $newsCategory->image = $file_path;
        }



        $newsCategory->save();
        return redirect()->route('admin_news_category')->with('success', 'Add ' . $request->name . ' successful!');
    }




    public function view_edit($id)
    {
        $newsCategory = new NewsCategoryModel();
        $listCategoryNews = $newsCategory->getAll();

        $detail = NewsCategoryModel::findOrFail($id);

        return view('admin.news.categories.edit', compact('detail', 'listCategoryNews'));
    }

    public function update(addCategoryNews $request, $id){

        $detail = NewsCategoryModel::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }
        $detail->status = $request->status;
        $detail->ordering = $request->ordering;


        if($request->category_id){
            $detail->category_id = $request->category_id;
            $detailCategory =  NewsCategoryModel::findOrFail($request->category_id);
            $detail->category_name = $detailCategory->name;
            $detail->level = $detailCategory->level + 1;
        }else{
            $detail->level = 0;
        }

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);


            $detail->image = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_news_category')->with('success', 'Edit ' . $request->name . ' successful!');
    }



}
