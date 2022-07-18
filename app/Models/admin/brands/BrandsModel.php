<?php

namespace App\Models\admin\brands;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class BrandsModel extends Model
{
    //
    protected $table = 'tv_brands';

    public function getAll(){
        $listBrands = DB::table($this->table)->get();
        return $listBrands;
    }
}
