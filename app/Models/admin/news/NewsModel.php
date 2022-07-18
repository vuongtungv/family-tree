<?php

namespace App\Models\admin\news;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsModel extends Model
{
    //
    protected $table = 'tv_news';

    public function getAll(){

        $news = DB::table($this->table)->get();
        return $news;
    }


}
