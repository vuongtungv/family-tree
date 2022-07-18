<?php

namespace App\Models\admin\products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SizeModel extends Model
{
    //
    protected $table = 'tv_product_size';


    public function getAll(){
        $listSizeProduct = DB::table($this->table)->get();
        return $listSizeProduct;
    }
}
