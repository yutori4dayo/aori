<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Region;
use App\News;
use App\Prefectures;
use App\NewsContents;
use Carbon\Carbon;
use App\Place;
use App\Brand;
use App\BodyType;
use App\Http\Services\HomeService;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    public function index(){
      $prefectures = Prefectures::all();
      $Cardata = Post::orderBy('created_at', 'desc')->take(5)->get();
      return view('index',compact('Cardata','prefectures'));
    }

    public function carimage(Request $request){
      $postId = $request->image;
      $Cardatas = Post::find($postId);
      $Carimage = $Cardatas->car_img;
      return view('carimage',compact('Carimage'));
    }

    public function post(){
      $prefectures = Prefectures::all();
      $brands = Brand::all();
      $bodytypes = BodyType::all();
      $regions = Region::all();

      return view('post',compact('prefectures','brands','bodytypes','regions'));
    }



    public function data(Request $request){
      $HomeService = new HomeService();
      $this->validate($request, [
        'Prefecture_city' => 'required|string|max:8',
        'Region' => 'nullable|string|max:4',
        'Classification' => 'nullable|digits_between:2,3',
        'Distinction' => 'nullable|regex:/^[あ-ん]+$/|max:1',
        'Mainnumber' => 'required|max:4',
        'text' => 'required|max:102',
        'car_img' => 'file|image|mimes:jpeg,png,jpg|max:2048',
      ]);

      if($request->car_img !== null){
      $extension = $request->file('car_img')->getClientOriginalName();
      $result = $request->file('car_img');
      $big = Image::make($result);
      $widths = 800;
      $heights = 700;
      $big->resize($widths, $heights);
      $big->blur(100);
      $img = Image::make($result);
      $width = 200;
      $height = 100;
      $img->resize($width, $height);
      $img->blur(100);
      $uniq = uniqid("img_").$extension;
      $save_path = public_path('img/'.$uniq);
      $save_paths = public_path('big/'.$uniq);
      $filepath = $uniq;
      $img->save($save_path);
      $big->save($save_paths);
      }else {
        $filepath = null;
      }

      $Region  =  $HomeService->covertNull($request->Region);
      $Classification = $HomeService->covertNull($request->Classification);
      $Distinction = $HomeService->covertNull($request->Distinction);
      $Mainnumber = $HomeService->checkNumber($request->Mainnumber);
      $Color = $request->Color;
      $Bland = $request->Bland;
      $Prefecture_city = $request->Prefecture_city;
      $body_type = $request->bodytype;
      $text = $request->text;

      $place = new Place();
      $place->where('name',$request->Prefecture_city)->increment('count',1);

      $brand = new Brand();
      $brand->where('name',$Bland)->increment('count',1);

      $bodytype = new BodyType();
      $bodytype->where('name',$body_type)->increment('count',1);

      $bodytype = new Region();
      $bodytype->where('name',$Region)->increment('count',1);

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

      if($filepath !==null){
        $request->session()->put('carimg',$filepath);
      }
      $CarData = $request->session()->all();
      return view('/check',compact('CarData'));
    }


    public function add(Request $request){
      $post = new Post();
      $post->Region = $request->session()->get('Region');
      $post->Classification = $request->session()->get('Classification');
      $post->Distinction = $request->session()->get('Distinction');
      $post->Mainnumber = $request->session()->get('Mainnumber');
      $post->Color = $request->session()->get('Color');
      $post->Bland = $request->session()->get('Bland');
      $post->Prefecture_city = $request->session()->get('Prefecture_city');
      $post->bodytype = $request->session()->get('body_type');
      $post->text = $request->session()->get('text');
       $user_ip = $_SERVER["REMOTE_ADDR"];
      $post->user_ip = $user_ip;
      $post->car_img = $request->session()->get('carimg');
        if($post->save()){
          $request->session()->flush();
          return redirect('/');
        }
    }

}
