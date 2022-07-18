<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addStyle;
use App\Models\admin\products\StyleModel;
use Illuminate\Http\Request;

class StyleController extends Controller
{

    //
    public $style;

    public function __construct()
    {
        $this->style = new StyleModel();
    }

    public function index()
    {
        $listStyle = $this->style->getAll();

        return view("admin.products.style.list", compact('listStyle'));
    }

    // thêm mới
    public function view_add(){
        return view("admin.products.style.add");
    }


    public function add(addStyle $request){
        $new = $this->style;
        $new->name = $request->name;

        $new->alias = str_slug($request->name,'-');
        if($request->alias){
            $new->alias = str_slug($request->alias, '-');
        }

        $new->ordering = $request->ordering;
        $new->published = $request->published;

        $new->save();
        return redirect()->route('admin_product_style')->with('success', 'Add ' . $request->name . ' successful!');
    }


    public function view_edit($id)
    {

        $detail = $this->style::findOrFail($id);

        return view('admin.products.style.edit', compact('detail'));
    }


    public function update(addStyle $request, $id){

        $detail = $this->style::findOrFail($id);

        $detail->name = $request->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->ordering = $request->ordering;
        $detail->published = $request->published;

        $detail->save();
        return redirect()->route('admin_product_style')->with('success', 'Edit ' . $request->name . ' successful!');
    }

}
