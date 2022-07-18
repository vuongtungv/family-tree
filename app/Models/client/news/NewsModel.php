<?php

namespace App\Models\client\news;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsModel extends Model
{
    //
    protected $limit;
    protected $table = 'tv_news';

    public function __construct()
    {
        $this->limit = 9;
    }

    public function getAll($page = null){
        if(!$page){
            $offset = 0;
        }else{
            $offset = $this->limit*($page-1);
        }
        $list = DB::table($this->table)
            ->select('id','name','alias', 'brief', 'category_id', 'category_name', 'image', 'created_at')
            ->where([
                ['status','=' , 1],
            ])
            ->offset($offset)
            ->limit($this->limit)
            ->get();
        return $list;
    }


    public function getNewsHome(){
        $list = DB::table($this->table)
            ->select('id','name','alias', 'brief', 'image', 'created_at')
            ->where([
                ['status','=' , 1],
                ['show_home','=', '1']
            ])
            ->limit(5)
            ->orderBy('created_at', 'asc')
            ->get();
        return $list;
    }


    public function getDetail($id){
        $detail = DB::table($this->table)
            ->select('id','name','alias', 'brief','content', 'category_id','category_name', 'image', 'created_at')
            ->where([
                ['id','=' , $id],
                ['status', '=', 1],
            ])
            ->first();
        return $detail;
    }


    /**
     *
     * Danh sách tin tức cùng danh mục ( bài viết liên quan)
     *
     **/
    public function getRecentPost($id, $category_id){
        $list = DB::table($this->table)
            ->select('id','name','alias', 'brief', 'image', 'created_at')
            ->where([
                ['status','=' , 1],
                ['show_home','=', '1']
            ])
            ->limit(4)
            ->where([
                ['id', '!=',$id],
                ['category_id', '=', $category_id],
                ['status', '=', 1],
            ])
            ->orderBy('created_at', 'asc')
            ->get();
        return $list;
    }


    /**
     *
     * Danh sách tin tức theo danh mục.
     *
    **/
    public function getListNewsByIDCategory($category_id, $page = null){

        if(!$page){
            $offset = 0;
        }else{
            $offset = $this->limit*($page-1);
        }
        $list = DB::table($this->table)
            ->select('id','name','alias', 'brief', 'category_id', 'category_name', 'image', 'created_at')
            ->where([
                ['category_id','=' , $category_id],
                ['status','=' , 1],
            ])
            ->offset($offset)
            ->limit($this->limit)
            ->get();
        return $list;
    }


    /**
     *
     * Lấy số trang theo phân trang.
     *
     **/
    public function getCountPage($category_id = null){
        if($category_id){
            $where = [
                ['category_id','=' , $category_id],
                ['status','=' , 1],
            ];
        }else{
            $where = [
                ['status','=' , 1],
            ];
        }
        $total = DB::table($this->table)
            ->select('id','name','alias', 'brief', 'category_id', 'category_name', 'image', 'created_at')
            ->where($where)
            ->count();
        return ceil($total/$this->limit);
    }
}
