<?php

namespace App\Models\client;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MenusModel extends Model
{
    //
    protected $table = 'tv_menus';


    public function getMenusTop(){
        $list = DB::table($this->table)
            ->select('id','name','alias', 'brief','link','parent_id', 'list_parent', 'level','ordering','image','target', 'created_at')
            ->where([
                ['published','=' , 1],
            ])
            ->get();
        return $list;
    }
}
