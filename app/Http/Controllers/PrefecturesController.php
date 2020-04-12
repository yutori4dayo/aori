<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Prefectures;

class PrefecturesController extends Controller
{
  public function Pre0($id){
    $prefectures = Prefectures::all();
    $preid = Prefectures::where('code',$id)->get();
    foreach ($preid as $pre) {
      $pre->name;
    }
    $Cardata = Post::where('Prefecture_city',$pre->name)->orderBy('created_at','desc')->paginate(5);
    $place = $pre->name;
    return view('prefectures.pre1',compact('Cardata','prefectures','place'));
  }

  public function Pre1(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','北海道')->orderBy('created_at','desc')->get();
    $place = '北海道';
    return view('prefectures.pre1',compact('Cardata','prefectures','place'));
  }

  public function Pre2(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','青森県')->orderBy('created_at','desc')->get();
    $place = '青森県';
    return view('prefectures.pre2',compact('Cardata','prefectures','place'));
  }

  public function Pre3(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','岩手県')->orderBy('created_at','desc')->paginate(5);
    $place = '岩手県';
    return view('prefectures.pre3',compact('Cardata','prefectures','place'));
  }

  public function Pre4(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','宮城県')->orderBy('created_at','desc')->get();
    $place = '宮城県';
    return view('prefectures.pre4',compact('Cardata','prefectures','place'));
  }

  public function Pre5(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','秋田県')->orderBy('created_at','desc')->get();
    $place = '秋田県';
    return view('prefectures.pre5',compact('Cardata','prefectures','place'));
  }

  public function Pre6(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','山形県')->orderBy('created_at','desc')->get();
    $place = '山形県';
    return view('prefectures.pre6',compact('Cardata','prefectures','place'));
  }
  public function Pre7(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','福島県')->orderBy('created_at','desc')->get();
    $place = '福島県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre8(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','茨城県')->orderBy('created_at','desc')->get();
    $place = '茨城県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre9(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','栃木県')->orderBy('created_at','desc')->get();
    $place = '栃木県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre10(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','群馬県')->orderBy('created_at','desc')->get();
    $place = '群馬県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre11(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','埼玉県')->orderBy('created_at','desc')->get();
    $place = '埼玉県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre12(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','千葉県')->orderBy('created_at','desc')->get();
    $place = '千葉県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre13(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','東京都')->orderBy('created_at','desc')->get();
    $place = '東京都';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre14(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','神奈川県')->orderBy('created_at','desc')->get();
    $place = '神奈川県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre15(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','山梨県')->orderBy('created_at','desc')->get();
    $place = '山梨県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre16(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','長野県')->orderBy('created_at','desc')->get();
    $place = '長野県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre17(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','新潟県')->orderBy('created_at','desc')->get();
    $place = '新潟県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre18(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','富山県')->orderBy('created_at','desc')->get();
    $place = '富山県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre19(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','石川県')->orderBy('created_at','desc')->get();
    $place = '石川県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre20(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','福井県')->orderBy('created_at','desc')->get();
    $place = '福井県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre21(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','岐阜県')->orderBy('created_at','desc')->get();
    $place = '岐阜県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre22(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','静岡県')->orderBy('created_at','desc')->get();
    $place = '静岡県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre23(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','愛知県')->orderBy('created_at','desc')->get();
    $place = '愛知県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre24(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','三重県')->orderBy('created_at','desc')->get();
    $place = '三重県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre25(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','滋賀県')->orderBy('created_at','desc')->get();
    $place = '滋賀県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre26(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','京都府')->orderBy('created_at','desc')->get();
    $place = '京都府';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre27(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','大阪府')->orderBy('created_at','desc')->get();
    $place = '大阪府';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre28(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','兵庫県')->orderBy('created_at','desc')->get();
    $place = '兵庫県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre29(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','奈良県')->orderBy('created_at','desc')->get();
    $place = '奈良県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre30(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','和歌山県')->orderBy('created_at','desc')->get();
    $place = '和歌山県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre31(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','鳥取県')->orderBy('created_at','desc')->get();
    $place = '鳥取県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre32(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','島根県')->orderBy('created_at','desc')->get();
    $place = '島根県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre33(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','岡山県')->orderBy('created_at','desc')->get();
    $place = '岡山県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre34(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','広島県')->orderBy('created_at','desc')->get();
    $place = '広島県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre35(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','徳島県')->orderBy('created_at','desc')->get();
    $place = '徳島県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre36(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','香川県')->orderBy('created_at','desc')->get();
    $place = '香川県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre37(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','高知県')->orderBy('created_at','desc')->get();
    $place = '高知県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre38(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','愛媛県')->orderBy('created_at','desc')->get();
    $place = '愛媛県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre39(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','山口県')->orderBy('created_at','desc')->get();
    $place = '山口県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre40(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','福岡県')->orderBy('created_at','desc')->get();
    $place = '福岡県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre41(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','大分県')->orderBy('created_at','desc')->get();
    $place = '大分県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre42(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','佐賀県')->orderBy('created_at','desc')->get();
    $place = '佐賀県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre43(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','熊本県')->orderBy('created_at','desc')->get();
    $place = '熊本県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre44(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','長崎県')->orderBy('created_at','desc')->get();
    $place = '長崎県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre45(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','宮城県')->orderBy('created_at','desc')->get();
    $place = '宮城県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre46(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','鹿児島県')->orderBy('created_at','desc')->get();
    $place = '鹿児島県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }
  public function Pre47(){
    $prefectures = Prefectures::all();
    $Cardata = Post::where('Prefecture_city','沖縄県')->orderBy('created_at','desc')->get();
    $place = '沖縄県';
    return view('prefectures.pre7',compact('Cardata','prefectures','place'));
  }






  public function serchcardata(Request $request){
    $prefectures = Prefectures::all();
    $Cardata =  Post::where('Color',$request->Color)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->get();
    return view('serchcardata',compact('Cardata','prefectures'));
  }

  public function serchcardata2(Request $request){
    $prefectures = Prefectures::all();
    $Cardata =  Post::where('Bland',$request->Bland)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->get();
    return view('serchcardata',compact('Cardata','prefectures'));
  }

  public function serchcardata3(Request $request){
    $prefectures = Prefectures::all();
    $Cardata =  Post::where('bodytype',$request->bodytype)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->get();
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
      // dd($test);
    }elseif(strlen($request->car_number) === 1){
      $tests = substr_replace($request->car_number,' ',-3,0);
      $number = '• '.'• '.' •'.$tests;
    }else {
      $number = substr_replace($request->car_number,'-',2,0);
    }
    $Cardata = Post::where('Mainnumber',$number)->where('Prefecture_city',$request->region)->orderBy('created_at','desc')->get();
    return view('serchcardata',compact('Cardata','prefectures'));
  }

 public function serchcardataall(){
   $prefectures = Prefectures::all();
   return view('allsearch',compact('prefectures'));
 }
// a
 public function allsearchs(Request $request){
   if(isset($request->Mainnumber)){
     if(strlen($request->Mainnumber) === 3){
       $tests = substr_replace($request->Mainnumber,' ',1,0);
        $Cardatass = '• '.$tests;
         $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->get();
         $prefectures = Prefectures::all();
         $count = count($Cardata);
          return view('allsearch',compact('Cardata','prefectures','count'));
     }elseif(strlen($request->Mainnumber) === 2){
       $tests = substr_replace($request->Mainnumber,' ',-2,0);
        $Cardatass = '• '.'•  '.$tests;
        $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->get();
        $prefectures = Prefectures::all();
        $count = count($Cardata);
         return view('allsearch',compact('Cardata','prefectures','count'));
     }elseif(strlen($request->Mainnumber) === 1){
       $tests = substr_replace($request->Mainnumber,' ',-3,0);
       $Cardatass = '• '.'• '.' •'.$tests;
        $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->get();
        $prefectures = Prefectures::all();
        $count = count($Cardata);
         return view('allsearch',compact('Cardata','prefectures','count'));
     }else {
       $Cardatass = substr_replace($request->Mainnumber,'-',2,0);
        $Cardata =  Post::where('Mainnumber',$Cardatass)->orderBy('created_at','desc')->get();
        $prefectures = Prefectures::all();
        $count = count($Cardata);
         return view('allsearch',compact('Cardata','prefectures','count'));
     }
   }
   $Cardata =  Post::where('Color',$request->Color)
   ->where('Prefecture_city',$request->Prefecture_city)
   ->where('Bland',$request->Bland)
   ->where('Color',$request->Color)
   ->where('bodytype',$request->bodytype)
   ->orderBy('created_at','desc')->get();
   $count = count($Cardata);
   $prefectures = Prefectures::all();
     return view('allsearch',compact('Cardata','prefectures','count'));
 }
}
