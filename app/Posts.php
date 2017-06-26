<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $dates = ['post_date'];
    //获取所有文章
    public static function scopeGetAllArticle($query){
        $query->select(['id','post_title','post_content','post_date'])
            ->where(['comment_status' => 'open','ping_status' => 'open','post_type' => 'post'])
            ->latest('id')
            ->limit(9);

//        $query->post_date = Carbon::diffForHumans($query-->post_date);
    }

    //获取最新发布的三篇文章/最火的三篇
    public static function scopeGetMostPopular($query){
        $query->select(['id','post_title','post_date'])
            ->where(['comment_status' => 'open','ping_status' => 'open','post_type' => 'post'])
//            ->latest('comment_count') //等同于  orderBy('comment_count','desc')
            ->latest('id')
            ->limit(3);
    }
}
