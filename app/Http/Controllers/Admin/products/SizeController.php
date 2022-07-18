<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addSize;
use App\Models\admin\products\SizeModel;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    //
    //
    public $size;

    public function __construct()
    {
        $this->size = new SizeModel();
    }

    public function index()
    {
        $listSize = $this->size->getAll();

        return view("admin.products.size.list", compact('listSize'));
    }

    // thêm mới
    public function view_add(){
        return view("admin.products.size.add");
    }


    public function add(addSize $request){
        $new = $this->size;
        $new->name = $request->name;

        $new->alias = str_slug($request->name,'-');
        if($request->alias){
            $new->alias = str_slug($request->alias, '-');
        }

        $new->ordering = $request->ordering;
        $new->published = $request->published;

        $new->save();
        return redirect()->route('admin_product_size')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {

        $detail = $this->size::findOrFail($id);

        return view('admin.products.size.edit', compact('detail'));
    }


    public function update(addColor $request, $id){

        $detail = $this->size::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->ordering = $request->ordering;
        $detail->published = $request->published;

        $detail->save();
        return redirect()->route('admin_product_size')->with('success', 'Edit ' . $request->name . ' successful!');
    }
}
