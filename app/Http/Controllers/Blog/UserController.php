<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Users;

class UserController extends Controller
{
    public function index(){
        $data = Users::all();
        return view('blog.content');
    }
}
