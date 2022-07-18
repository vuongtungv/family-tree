<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addColor;
use App\Models\admin\products\ColorModel;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    public $color;

    public function __construct()
    {
        $this->color = new ColorModel();
    }

    public function index()
    {
        $listColor = $this->color->getAll();

        return view("admin.products.color.list", compact('listColor'));
    }

    // thêm mới
    public function view_add(){
        return view("admin.products.color.add");
    }


    public function add(addColor $request){
        $new = $this->color;
        $new->name = $request->name;

        $new->alias = str_slug($request->name,'-');
        if($request->alias){
            $new->alias = str_slug($request->alias, '-');
        }

        $new->ordering = $request->ordering;
        $new->published = $request->published;

        $new->save();
        return redirect()->route('admin_product_color')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {

        $detail = $this->color::findOrFail($id);

        return view('admin.products.color.edit', compact('detail'));
    }


    public function update(addColor $request, $id){

        $detail = $this->color::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->ordering = $request->ordering;
        $detail->published = $request->published;

        $detail->save();
        return redirect()->route('admin_product_color')->with('success', 'Edit ' . $request->name . ' successful!');
    }
}
