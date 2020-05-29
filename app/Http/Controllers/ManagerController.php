<?php

namespace App\Http\Controllers;
use App\Manager;
use App\Post;
use App\Affiliate;

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
        $posts = Post::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        $banners = Affiliate::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        return view('admin.home',compact('posts','banners'));
      }else {
        return redirect('/');
      }
    }

    public function delete(Request $request){
      if($request->type === "1"){
        //投稿削除
        $item = Post::find($request->id);
        $HomeService = new HomeService();
        $HomeService->decrementAllCount($item->Prefecture_city,$item->Bland,$item->bodytype,$item->Region);
        Post::where('id',$request->id)->delete();
        $posts = Post::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        $banners = Affiliate::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        return view('admin.home',compact('posts','banners'));
      }elseif($request->type === "2"){
        //アフィリエイト削除
        Affiliate::where('id',$request->id)->delete();
        $posts = Post::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        $banners = Affiliate::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        return view('admin.home',compact('posts','banners'));
      }
    }

    public function afi(Request $request){
      if($request->type === null){
        $posts = Post::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        $banners = Affiliate::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
        return view('admin.home',compact('posts','banners'));
      }elseif($request->type === "1"){
        $Affiliate = new Affiliate();
        if($Affiliate->fill($request->all())->save()){
          $posts = Post::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
          $banners = Affiliate::orderBy('created_at', 'desc')->paginate(config('app.paginatecount'));
          return view('admin.home',compact('posts','banners'));
        }
      }
    }

    public function afiliate(){
      return view('admin.afiliate');
    }
}
