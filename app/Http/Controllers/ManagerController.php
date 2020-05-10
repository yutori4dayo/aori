<?php

namespace App\Http\Controllers;
use App\Manager;
use App\Post;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function login(){
      return view('admin.login');
    }

    public function check(Request $request){
      if($request->email === config('app.email') && $request->password === config('app.password')){
        $posts = Post::all();
        return view('admin.home',compact('posts'));
      }else {
        return redirect('/');
      }


    }
}
