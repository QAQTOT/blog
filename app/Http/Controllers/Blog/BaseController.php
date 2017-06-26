<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posts;
/*
**  基础类用于各种公用方法
*/
class BaseController extends Controller
{
    protected static $mostpop; //最受欢迎列表
    function __construct()
    {
        self::$mostpop = Posts::getMostPopular()->get();
    }

    public static function sortData($len){
        $sortArr = [ 1 => 'full', 2 => 'two', 3 => 'one'];
        $result = array();

        for ($i = 1;$i<= intval($len) ; $i++){
            $only = $len-$i;
            if($only == 0){
                array_push($result,'full');
                return $result;
            }
            $rd = mt_rand(1,3);
            array_push($result,$sortArr[$rd]);
            if($rd != 1){
                if($rd == 2){
                    array_push($result,'one'); $only = 1;
                }else{
                    $next = mt_rand(2,3);
                    if($next == 2){
                        array_push($result,'two'); $only = 1;
                    }else{
                        if($only == 1){
                            array_push($result,'two');
                        }else{
                            array_push($result,'one','one'); $only = 2;
                        }
                    }
                }
                $i += $only;
            }
        }
        return $result;
    }
}
