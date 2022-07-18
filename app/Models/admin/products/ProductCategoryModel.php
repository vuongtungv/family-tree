<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductCategoryModel extends Model
{
    //
    protected $table = 'tv_product_category';


    public function getAll(){

        $newsCategory = DB::table($this->table)->get();
        return $newsCategory;
    }

    public function getCategory(){
        $list = DB::table($this->table)
            ->select('id','name','alias', 'level', 'parent_id', 'list_parent', 'image', 'created_at')
            ->where([
                ['published','=' , 1],
            ])
            ->orderBy('created_at', 'asc')
            ->get();
        return $list;
    }
}
