<?php

namespace App\Models\admin\banners;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BannersModel extends Model
{
    //
    //
    protected $table = 'tv_banners';


    public function getAll(){
        $listBanners = DB::table($this->table)->get();
        return $listBanners;
    }
}
