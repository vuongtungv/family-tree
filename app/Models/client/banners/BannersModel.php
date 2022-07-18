<?php

namespace App\Models\client\banners;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use test\Mockery\MockingVariadicArgumentsTest;

class BannersModel extends Model
{
    //

    public function getBanners($category_id){
        if($category_id){
            $list = DB::table('tv_banners')
                ->select('id','name','alias', 'link', 'brief', 'image','target')
                ->where([
                    ['category_id','=' ,$category_id],
                    ['status','=', '1']
                ])
                ->get();
            return $list;
        }
        return false;
    }
}
