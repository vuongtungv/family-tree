<?php

namespace App\Models\admin\news;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class NewsCategoryModel extends Model
{
    //
    protected $table = 'tv_categories_news';


    public function getAll(){

        $newsCategory = DB::table($this->table)->get();
        return $newsCategory;
    }
}
