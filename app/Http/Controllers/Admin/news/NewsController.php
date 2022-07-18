<?php

namespace App\Http\Controllers\Admin\news;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addNew;

use App\Http\Controllers\Admin\FileUploadController;
use App\Models\admin\news\NewsCategoryModel;
use App\Models\admin\news\NewsModel;

////use Illuminate\Http\Request;
//use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File;


class NewsController extends Controller
{

    public $path_base;
    public $fileUploadController;
    public $array_size;

    public function __construct()
    {
        $this->array_size=[
            'large' => '1170, 768',
            'small' => '370, 330',
            'tiny' => '83, 83',
        ];
        $this->fileUploadController = new FileUploadController();
        $this->path_base = '/images/news/news/';
    }


    //
    public function index()
    {
        $news = new NewsModel();
        $listNews = $news->getAll();
        return view("admin.news.news.list", compact('listNews'));
    }


    // thêm mới
    public function view_add(){
        $newsCategory = new NewsCategoryModel();
        $listCategoryNews = $newsCategory->getAll();
        return view("admin.news.news.add", compact('listCategoryNews'));
    }


    public function add(addNew $request){
        $new = new NewsModel();
        $new->name = $request->name;
        $new->brief = $request->brief;
        $new->content = $request->body;
        $new->category_id = $request->category_id;

        $getDetailCategory = NewsCategoryModel::findOrFail($new->category_id);
        $new->category_name = $getDetailCategory->name;

        $new->alias = str_slug($request->name,'-');
        if($request->alias){
            $new->alias = str_slug($request->alias, '-');
        }


        $new->status = $request->status;
        $new->show_home = $request->show_home;
        $new->count_read = 0;
        $new->ordering = $request->ordering;

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $new->image = $file_path;
        }

        $new->save();
        return redirect()->route('admin_family_tree_list')->with('success', 'Add ' . $request->name . ' successful!');
    }



    public function view_edit($id)
    {
        $newsCategory = new NewsCategoryModel();
        $listCategoryNews = $newsCategory->getAll();

        $detail = NewsModel::findOrFail($id);

        return view('admin.news.news.edit', compact('detail', 'listCategoryNews'));
    }



    public function update(addNew $request, $id){

        $detail = NewsModel::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->brief = $request->brief;
        $detail->content = $request->body;
        $detail->category_id = $request->category_id;

        $getDetailCategory = NewsCategoryModel::findOrFail($detail->category_id);
        $detail->category_name = $getDetailCategory->name;

        $detail->status = $request->status;
        $detail->show_home = $request->show_home;
        $detail->ordering = $request->ordering;




        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $detail->image = $file_path;
        }

        $detail->save();
        return redirect()->route('admin_news')->with('success', 'Edit ' . $request->name . ' successful!');
    }




}
