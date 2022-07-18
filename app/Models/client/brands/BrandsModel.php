<?php

namespace App\Models\client\brands;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BrandsModel extends Model
{
    //
    protected $table = 'tv_brands';

    function getBrandsHome(){
        $list = DB::table($this->table)
            ->select('id','name','alias', 'brief', 'image', 'created_at')
            ->where([
                ['published','=' , 1],
            ])
            ->limit(5)
            ->get();
        return $list;
    }
}
