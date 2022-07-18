<?php

namespace App\Models\client\news;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsCategoryModel extends Model
{
    //
    protected $table = 'tv_categories_news';
    protected $limit = 1;


    public function getCategory(){
        $list = DB::table($this->table)
            ->select('id','name','alias')
            ->where([
                ['status','=' , 1],
                ['level','=' , 0],
            ])
            ->get();
        return $list;
    }



}
