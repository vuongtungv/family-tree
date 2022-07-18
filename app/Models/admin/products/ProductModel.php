<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductModel extends Model
{
    //
    //
    use Notifiable,
        SoftDeletes;// add soft delete
    protected $table = 'tv_product';


    public function getAll(){

        $listProducts = DB::table($this->table)->where('deleted_at', null)->get();
        return $listProducts;
    }


    public function save_option($item_option){
//        DB::table('tv_product_option')->insert(array($item_option));

        $product_option = DB::table('tv_product_option')

            ->insertGetId(

                $item_option

            );

        return $product_option;
    }

    public function update_option_product($edit_option, $id){
        $product_option = DB::table('tv_product_option')
            ->where('id', $id)
            ->update($edit_option);
        return $product_option;
    }




    public function save_image_option($item_image){
//        DB::table('tv_product_option')->insert(array($item_option));

        $image_option = DB::table('tv_product_image')

            ->insertGetId(

                $item_image

            );

        return $image_option;
    }


    public function getOption($id_product){
        $product_option = DB::table('tv_product_option')
            ->where('product_id' ,'=',$id_product)
            ->get(['id','name', 'product_id', 'quantity', 'style_id', 'color_id','size_id', 'price', 'published']);
        return $product_option;
    }

    public function getImageOption($id_product){
        $image_option = DB::table('tv_product_image')
            ->where('product_id' ,'=',$id_product)
            ->get(['id', 'image', 'type', 'size', 'product_id', 'product_option_id']);
        return $image_option;
    }



    public function deleteItemOptionByIdOption($request, $array_size = '' ){
        if($request->id_option){
            DB::table("tv_product_option")
                ->where("id" , '=', $request->id_option)
                ->delete();
            $list_img = DB::table('tv_product_image')
                ->where("product_option_id" , "=",$request->id_option )->get();
            if($list_img){
                foreach ($list_img as $lm){
                    $this->deleteItemImage($lm->image, $array_size);
                }
            }

            return true;
        }
        return false;

    }

    public function deleteItemImage($url_image, $array_size = '')
    {
        if($url_image){
            foreach ($array_size as $item){
                $url_storage = str_replace("/original/", "/".$item."/",$url_image );
                if(Storage::exists($url_storage)){
                    Storage::delete($url_storage);
                    /*
                        Delete Multiple File like this way
                        Storage::delete(['upload/test.png', 'upload/test2.png']);
                    */
                }
            }

            DB::table("tv_product_image")
                ->where("image" , '=', $url_image)
                ->delete();
            return true;
        }
        return false;
    }


    /**
     * Xóa sản phẩm
     *
    */
    public function destroyById($id, $array_size = ''){
        ProductModel::find($id)->delete();

        // xóa các product option
        $this->deleteItemOptionById($id, $array_size);


        return true;
    }

    public function deleteItemOptionById($id ,$array_size = ''){
        DB::table("tv_product_option")
            ->where("product_id" , '=', $id)
            ->delete();

        $list_img = DB::table('tv_product_image')
            ->where("product_id" , "=",$id)->get();
        if($list_img){
            foreach ($list_img as $lm){
                $this->deleteItemImage($lm->image, $array_size);
            }
        }

    }

}
