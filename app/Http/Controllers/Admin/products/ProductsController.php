<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Admin\FileUploadController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\addProduct;
use App\Models\admin\products\ColorModel;
use App\Models\admin\products\ProductCategoryModel;
use App\Models\admin\products\ProductModel;
use App\Models\admin\products\SizeModel;
use App\Models\admin\products\StyleModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $path;
    public $fileUploadController;
    public $array_size;
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->array_size=[
            'big' => '1000, 1000',
            'large' => '600, 600',
            'small' => '270, 270',
            'tiny' => '100, 100',
        ];
        $this->fileUploadController = new FileUploadController();
        $this->path_base = '/images/products/products/';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = new ProductModel();
        $listProducts = $list->getAll();
        return view("admin.products.products.list", compact('listProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productsCategory = new ProductCategoryModel();
        $listCategoryProducts = $productsCategory->getCategory();

        $styleModel = new StyleModel();
        $SizeModel = new SizeModel();
        $ColorModel = new ColorModel();

        $listStyle = $styleModel->getAll();
        $listSize = $SizeModel->getAll();
        $listColor = $ColorModel->getAll();

        $compact =  [
          'listCategoryProducts',
          'listStyle',
          'listSize',
          'listColor',
        ];

        return view("admin.products.products.add", compact($compact));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addProduct $request)
    {

        $product = new ProductModel();
        $product->name = $request->name;
        $product->price_range_1 = $request->price_range_1;
        $product->price_range_2 = $request->price_range_2;
        $product->brief = $request->brief;
        $product->description = $request->body;
        $product->category_id = $request->category_id;

        $getDetailCategory = ProductCategoryModel::findOrFail($request->category_id);
        $product->category_name = $getDetailCategory->name;

        $product->alias = str_slug($request->name,'-');
        if($request->alias){
            $product->alias = str_slug($request->alias, '-');
        }

        $product->published = $request->status;
        $product->show_home = $request->show_home;
        $product->ordering = $request->ordering;

        // Kiểm tra xem người dùng có upload file lên không
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $file_path = $this->fileUploadController->uploadImage($image, $this->path_base);
            $this->fileUploadController->uploadImageFit($image, $this->path_base, $this->array_size);

            $product->image = $file_path;
        }
        $product->save();

        $this->save_option_product($product->id, $request);


        return redirect()->route('admin_products_products')->with('success', 'Add ' . $request->name . ' successful!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $productsCategory = new ProductCategoryModel();
        $listCategoryProducts = $productsCategory->getCategory();

        $styleModel = new StyleModel();
        $SizeModel = new SizeModel();
        $ColorModel = new ColorModel();

        $listStyle = $styleModel->getAll();
        $listSize = $SizeModel->getAll();
        $listColor = $ColorModel->getAll();

        $detail = ProductModel::findOrFail($id);

        $detail_option = $this->productModel->getOption($detail->id);
        $image_option = $this->productModel->getImageOption($detail->id);

        $js_image_option = array();

        foreach ($detail_option as $key => $option){
            foreach ($image_option as $k => $im){
                if($im->product_option_id == $option->id){
                    $js_image_option[$option->id][$im->id]['name'] = explode(".", $im->image)[0];
                    $js_image_option[$option->id][$im->id]['size'] = $im->size;
                    $js_image_option[$option->id][$im->id]['type'] = explode(".", $im->image)[1];
                }
            }
        }

        $compact =  [
            'listCategoryProducts',
            'listStyle',
            'listSize',
            'listColor',
            'detail',
            'detail_option',
            'image_option',
            'js_image_option'
        ];


        return view('admin.products.products.edit', compact($compact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(addProduct $request, $id)
    {
        //
        $detail = ProductModel::findOrFail($id);

        $detail->name = $request->name;
        $detail->price_range_1 = $request->price_range_1;
        $detail->price_range_2 = $request->price_range_2;
        $detail->brief = $request->brief;
        $detail->description = $request->body;
        $detail->category_id = $request->category_id;

        $getDetailCategory = ProductCategoryModel::findOrFail($request->category_id);
        $detail->category_name = $getDetailCategory->name;

        $detail->alias = str_slug($request->name,'-');
        if($request->alias){
            $detail->alias = str_slug($request->alias, '-');
        }

        $detail->published = $request->status;
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


        // lưu option cũ.
        $modelProduct = new ProductModel();
        if($request->name_option){
            foreach ($request->name_option as $key => $item){
                $id_option_up = $key;
                if(isset($request->published_option[$key][0])){
                    $published_t = 1;
                }else{
                    $published_t = 0;
                }
                $edit_option = [
                    "product_id" => $id,
                    "name" => $item ?? "",
                    "alias" => str_slug($item, '-'),
                    "style_id" => $request->style_id[$key][0] ?? "",
                    "color_id" => $request->color_id[$key][0] ?? "",
                    "size_id" => $request->size_id[$key][0] ?? "",
                    "quantity" => $request->quantity[$key][0] ?? "",
                    "price" => $request->price[$key][0] ?? "",
                    "published" => $published_t
                ];
                $modelProduct->update_option_product($edit_option, $id_option_up);

                // lưu ảnh vào bảng ảnh
                if(isset($request->FilesOption[$key])){
                    foreach ($request->FilesOption[$key] as $k=> $uf){
                        $file_path = $this->fileUploadController->uploadImage($uf, $this->path_base);
                        $this->fileUploadController->uploadImageFit($uf, $this->path_base, $this->array_size);

                        $item_image_save = [
                            'product_id' => $id,
                            'product_option_id' => $key,
                            'image' => $file_path,
                            'type' => $uf->extension(),
                            'size' => $uf->getSize()
                        ];

                        $modelProduct->save_image_option($item_image_save);

                    }
                }

            }
        }


        // lưu các option mới nếu có.
        $this->save_option_product($detail->id, $request);

        return redirect()->route('admin_products_products')->with('success', 'Edit ' . $detail->name . ' successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $modelProduct = new ProductModel();
        $modelProduct->destroyById($request->id, $this->array_size);

        return redirect()->route('admin_products_products')
            ->with('success','Product deleted successfully');
    }


    public function save_option_product($id, $request){
        $product_option = $request->group_a;
//dd($product_option);

        $modelProduct = new ProductModel();

        if($product_option){
            foreach ($product_option as $key => $item_option){
                if($item_option['name_option']
                    && $item_option['style_id']
                    && $item_option['color_id']
                    && $item_option['size_id']
                    && $item_option['quantity']
                    && $item_option['price']
                ){
                    if(isset($item_option['published_option'])){
                        $published = 1;
                    }else{
                        $published = 0;
                    }

                    // lưu các option sản phẩm
                    $item_save = [
                        "product_id" => $id,
                        "name" => $item_option['name_option'],
                        "alias" => str_slug($item_option['name_option'], '-'),
                        "style_id" => $item_option['style_id'],
                        "color_id" => $item_option['color_id'],
                        "size_id" => $item_option['size_id'],
                        "quantity" => $item_option['quantity'],
                        "price" => $item_option['price'],
                        "published" => $published
                    ];
                    $id_option = $modelProduct->save_option($item_save);

                    // lưu ảnh vào bảng ảnh
                    if($id_option && $item_option['UploadFiles']){
                        foreach ($item_option['UploadFiles'] as $k=> $uf){
                            $file_path = $this->fileUploadController->uploadImage($uf, $this->path_base);
                            $this->fileUploadController->uploadImageFit($uf, $this->path_base, $this->array_size);

                            $item_image_save = [
                                'product_id' => $id,
                                'product_option_id' => $id_option,
                                'image' => $file_path,
                                'type' => $uf->extension(),
                                'size' => $uf->getSize()
                            ];

                            $modelProduct->save_image_option($item_image_save);

                        }
                    }
                }
            };
        }



        return true;

    }




    // delete item option
    public function deleteOption(Request $request){
        $delete_option = $this->productModel->deleteItemOptionByIdOption($request, $this->array_size);
        return $delete_option;
    }



    // delete image item option
    public function deleteItemImage(Request $request){
        if($request->url_image){
            $delete_image = $this->productModel->deleteItemImage($request->url_image, $this->array_size);
            return $delete_image;
        }
        return false;

    }
}
