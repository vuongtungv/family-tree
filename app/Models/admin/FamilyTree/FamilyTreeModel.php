<?php

namespace App\Models\admin\FamilyTree;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FamilyTreeModel extends Model
{
    //

    //
    protected $table = 'tv_family_tree';

    public function getAll(){

        $familyTree = DB::table($this->table)->get();
        return $familyTree;
    }
}
