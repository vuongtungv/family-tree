<?php

namespace App\Models\admin\menus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MenuModel extends Model
{
    //
    protected $table = 'tv_menus';


    public function getAll(){
        $listMenu = DB::table($this->table)->get();
        return $listMenu;
    }
}
