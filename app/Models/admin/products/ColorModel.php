<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ColorModel extends Model
{
    //
    protected $table = 'tv_product_color';


    public function getAll(){
        $listColorProduct = DB::table($this->table)->get();
        return $listColorProduct;
    }
}
