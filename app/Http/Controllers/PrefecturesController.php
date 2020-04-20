<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Brand;
use App\BodyType;
use App\Prefectures;

class PrefecturesController extends Controller
{
  public function Pre0($id){
    $prefectures = Prefectures::all();
    $preid = Prefectures::where('code',$id)->get();
    foreach ($preid as $pre) {
      $pre->name;
    }
    $Cardata = Post::where('Prefecture_city',$pre->name)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
    $place = $pre->name;
    return view('prefectures.pre1',compact('Cardata','prefectures','place'));
  }

  public function serchcardata(Request $request){
    $prefectures = Prefectures::all();
    $Cardata =  Post::where('Color',$request->Color)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
    return view('serchcardata',compact('Cardata','prefectures'));
  }

  public function serchcardata2(Request $request){
    $prefectures = Prefectures::all();
    $Cardata =  Post::where('Bland',$request->Bland)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
    return view('serchcardata',compact('Cardata','prefectures'));
  }

  public function serchcardata3(Request $request){
    $prefectures = Prefectures::all();
    $Cardata =  Post::where('bodytype',$request->bodytype)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
    return view('serchcardata',compact('Cardata','prefectures'));
  }

  public function serchcardata4(Request $request){
    $prefectures = Prefectures::all();
    if(strlen($request->car_number) === 3){
      $tests = substr_replace($request->car_number,' ',1,0);
       $number = '• '.$tests;
    }elseif(strlen($request->car_number) === 2){
      $tests = substr_replace($request->car_number,' ',-2,0);
       $number = '• '.'•  '.$tests;
    }elseif(strlen($request->car_number) === 1){
      $tests = substr_replace($request->car_number,' ',-3,0);
      $number = '• '.'• '.' •'.$tests;
    }else {
      $number = substr_replace($request->car_number,'-',2,0);
    }
    $Cardata = Post::where('Mainnumber',$number)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
    return view('serchcardata',compact('Cardata','prefectures'));
  }

 public function serchcardataall(){
   $prefectures = Prefectures::all();
   $brands = Brand::all();
   $bodytypes = BodyType::all();
   return view('allsearch',compact('prefectures','brands','bodytypes'));
 }
// a
 public function allsearchs(Request $request){
   if(isset($request->Mainnumber)){
     if(strlen($request->Mainnumber) === 3){
       $tests = substr_replace($request->Mainnumber,' ',1,0);
        $Cardatass = '• '.$tests;
         $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
         $prefectures = Prefectures::all();
         $brands = Brand::all();
         $bodytypes = BodyType::all();
         $count = count($Cardata);
          return view('allsearch',compact('Cardata','prefectures','count','brands','bodytypes'));
     }elseif(strlen($request->Mainnumber) === 2){
       $tests = substr_replace($request->Mainnumber,' ',-2,0);
        $Cardatass = '• '.'•  '.$tests;
        $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
        $prefectures = Prefectures::all();
        $brands = Brand::all();
        $bodytypes = BodyType::all();
        $count = count($Cardata);
         return view('allsearch',compact('Cardata','prefectures','count','brands','bodytypes'));
     }elseif(strlen($request->Mainnumber) === 1){
       $tests = substr_replace($request->Mainnumber,' ',-3,0);
       $Cardatass = '• '.'• '.' •'.$tests;
        $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
        $prefectures = Prefectures::all();
        $brands = Brand::all();
        $bodytypes = BodyType::all();
        $count = count($Cardata);
         return view('allsearch',compact('Cardata','prefectures','count','brands','bodytypes'));
     }else {
       $Cardatass = substr_replace($request->Mainnumber,'-',2,0);
        $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
        $prefectures = Prefectures::all();
        $brands = Brand::all();
        $bodytypes = BodyType::all();
        $count = count($Cardata);
         return view('allsearch',compact('Cardata','prefectures','count','brands','bodytypes'));
     }
   }
   $Cardata =  Post::where('Color',$request->Color)
   ->where('Prefecture_city',$request->Prefecture_city)
   ->where('Bland',$request->Bland)
   ->where('Color',$request->Color)
   ->where('bodytype',$request->bodytype)
   ->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
   $count = count($Cardata);
   $prefectures = Prefectures::all();
   $brands = Brand::all();
   $bodytypes = BodyType::all();
     return view('allsearch',compact('Cardata','prefectures','count','brands','bodytypes'));
 }
}
