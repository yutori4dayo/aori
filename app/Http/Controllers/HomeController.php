<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;
use App\Post;
use App\Region;
use App\News;
use App\Prefectures;
use App\NewsContents;
use Carbon\Carbon;
use App\Brand;
use App\BodyType;
use App\Http\Services\HomeService;
use App\Http\Services\PostService;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
      $prefectures = Prefectures::all();
      $Cardata = Post::orderBy('created_at', 'desc')->simplePaginate(config('app.paginatecount'));
      $HomeService = new HomeService();
      $afi1 = $HomeService->getAfis();
      $getFirstPlaceAll = $HomeService->getFirstPlaceAll();
      $dt = Carbon::now();
      $dtNow = $dt->format('Y年m月d日 H時');
      return view('index',compact('Cardata','prefectures','getFirstPlaceAll','dtNow','afi1'));
    }

    public function carimage(Request $request){
      $postId = $request->image;
      $Cardatas = Post::find($postId);
      $Carimage = $Cardatas->car_img;
      return view('carimage',compact('Carimage'));
    }

    public function post(){
      $HomeService = new HomeService();
      list($prefectures,$brands,$bodytypes,$regions) = $HomeService->getallAll();
      return view('post',compact('prefectures','brands','bodytypes','regions'));
    }

    public function deletePost(Request $request){
      $postInfos =  Post::find($request->id);
      if($request->delete_key){
        if (Hash::check($request->delete_key, $postInfos->delete_key)) {
            Post::where('id',$request->id)->delete();

            $HomeService = new HomeService();
            $HomeService->decrementAllCount($postInfos->Prefecture_city,$postInfos->Bland,$postInfos->bodytype,$postInfos->Region);
            return redirect('/')->with('flash_message', '削除されました。');
        }else {
          return redirect('/confirmDelete'.'/'.$request->id)->with('flash_message', '削除keyが違います');
        }
      }else {
        return redirect('/confirmDelete'.'/'.$request->id)->with('flash_message', '削除keyが設定されていません');
      }
    }

    public function confirmDelete($id){
      return view('/confirmDelete',compact('id'));
    }



    public function data(Request $request){

      $this->validate($request, [
        'Prefecture_city' => 'required',
        'Region' => 'nullable|string|max:4',
        'Classification' => 'nullable|digits_between:2,3',
        'Distinction' => 'nullable|regex:/^[あ-ん]+$/|max:1',
        'Mainnumber' => 'required|max:4',
        'text' => 'required|max:102',
        'car_img' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        'delete_key' => 'nullable|min:4',
      ]);

      if($request->car_img !== null){
        $extension = $request->file('car_img')->getClientOriginalName();
        $result = $request->file('car_img');
        $HomeService = new HomeService();
        $filepath = $HomeService->saveImagePath($result,$extension);
      }else {
        $filepath = null;
      }
      $HomeService = new HomeService();
      $Region  =  $HomeService->covertNull($request->Region);
      $Classification = $HomeService->covertNull($request->Classification);
      $Distinction = $HomeService->covertNull($request->Distinction);
      $Mainnumber = $HomeService->checkNumber($request->Mainnumber);
      $maskednumber = $HomeService->maskNumber($request->Mainnumber);
      $Color = $request->Color;
      $Bland = $request->Bland;
      $Prefecture_city = $request->Prefecture_city;
      $body_type = $request->bodytype;
      $text = $request->text;


      // $PostService = new PostService();
      // $data =  $PostService->continuousPostCheck($Mainnumber);
      //
      // if($data['someday'] !== null){
      //   if($data['today'] === $data['someday']){
      //     return redirect('/')->with('Regulation_message', '連投できません。');
      //   }
      // }

      $request->session()->put('delete_key',$request->delete_key);
      $request->session()->put('Region',$Region);
      $request->session()->put('Classification',$Classification);
      $request->session()->put('Distinction',$Distinction);
      $request->session()->put('Mainnumber',$Mainnumber);
      $request->session()->put('Color',$Color);
      $request->session()->put('Bland',$Bland);
      $request->session()->put('Prefecture_city',$Prefecture_city);
      $request->session()->put('body_type',$body_type);
      $request->session()->put('text',$text);
      $request->session()->put('tests',$filepath);
      $request->session()->put('maskednumber',$maskednumber);

      if($filepath !==null){
        $request->session()->put('carimg',$filepath);
      }
      $CarData = $request->session()->all();
      return view('/check',compact('CarData'));
    }



    public function add(Request $request){
      $HomeService = new HomeService();
      $HomeService->incrementAllCount($request->session()->get('Prefecture_city'),$request->session()->get('Bland'),$request->session()->get('body_type'),$request->session()->get('Region'));
      $hased_key = Hash::make($request->session()->get('delete_key'));

      $post = new Post();
      $post->delete_key = $hased_key;
      $post->Region = $request->session()->get('Region');
      $post->Classification = $request->session()->get('Classification');
      $post->Distinction = $request->session()->get('Distinction');
      $post->Mainnumber = $request->session()->get('Mainnumber');
      $post->Color = $request->session()->get('Color');
      $post->Bland = $request->session()->get('Bland');
      $post->Prefecture_city = $request->session()->get('Prefecture_city');
      $post->bodytype = $request->session()->get('body_type');
      $post->text = $request->session()->get('text');
      $post->maskednumber = $request->session()->get('maskednumber');
      $post->user_ip = $_SERVER["REMOTE_ADDR"];
      $post->car_img = $request->session()->get('carimg');
        if($post->save()){
          $request->session()->flush();
          return redirect('/');
        }
    }
}
