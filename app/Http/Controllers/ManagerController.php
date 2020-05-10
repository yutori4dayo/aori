<?php

namespace App\Http\Controllers;
use App\Manager;
use App\Post;

use Illuminate\Http\Request;
use App\Http\Services\HomeService;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function login(){
      return view('admin.login');
    }

    public function check(Request $request){
      if($request->email === config('app.email') && $request->password === config('app.password')){
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(config('app.paginatecount'));
        return view('admin.home',compact('posts'));
      }else {
        return redirect('/');
      }
    }

    public function delete($id){
      $item = Post::find($id);
      $HomeService = new HomeService();
      $HomeService->decrementAllCount($item->Prefecture_city,$item->Bland,$item->bodytype,$item->Region);
      Post::where('id',$id)->delete();
      $posts = Post::orderBy('created_at', 'desc')->simplePaginate(config('app.paginatecount'));
      return view('admin.home',compact('posts'));
    }

    public function afi(){
      return view('admin.afi');
    }
}
