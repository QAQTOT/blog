<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //test测试
    public function test(){


        return view('welcome')->with(['HelloWorld'=> 'HelloWorld']);
    }
}
