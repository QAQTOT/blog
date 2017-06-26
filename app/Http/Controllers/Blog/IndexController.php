<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BaseController;
use App\Posts;

class IndexController extends BaseController
{
    //博客首页
    public function index(){

        $pageNum = 6;
        $data = Posts::getAllArticle()->paginate($pageNum);
        $sort = parent::sortData($pageNum);
        $mostpop = parent::$mostpop;
        return view('blog.index',compact('data','sort','mostpop'));
    }

    //博客详情
    public function detail($id){

        $number = intval($id);
        $detail = Posts::findOrFail($id);
        return view('blog.detail',['detail' => $detail,'mostpop' => parent::$mostpop]);
    }



}
