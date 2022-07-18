<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StyleModel extends Model
{
    //
    //
    protected $table = 'tv_product_style';


    public function getAll(){
        $listStyleProduct = DB::table($this->table)->get();
        return $listStyleProduct;
    }
}
