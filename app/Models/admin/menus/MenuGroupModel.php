<?php

namespace App\Models\admin\menus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MenuGroupModel extends Model
{
    //
    protected $table = 'tv_menus_group';


    public function getAll(){
        $listMenu = DB::table($this->table)->get();
        return $listMenu;
    }
}
