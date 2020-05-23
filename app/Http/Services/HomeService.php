<?php

namespace App\Http\Services;

use App\Post;
use App\Affiliate;
use App\Region;
use App\News;
use App\Prefectures;
use Carbon\Carbon;
use App\Brand;
use App\BodyType;
use Abraham\TwitterOAuth\TwitterOAuth;
use Intervention\Image\ImageManagerStatic as Image;

class HomeService
{
  public function getFirstPlaceAll(){
    $firstPlace['Pre'] = Prefectures::orderBy('count', 'desc')->first();
    $firstPlace['Brand'] = Brand::orderBy('count', 'desc')->first();
    $firstPlace['BodyType'] = BodyType::orderBy('count', 'desc')->first();
    $firstPlace['Region'] = Region::orderBy('count', 'desc')->first();
    return $firstPlace;
  }

  public function getallAll(){
    $prefectures = Prefectures::all();
    $brands = Brand::all();
    $bodytypes = BodyType::all();
    $regions = Region::all();
    return [$prefectures,$brands,$bodytypes,$regions];
  }

  public function saveImagePath($val,$ext){
    $big = Image::make($val);
    $widths = 800;
    $heights = 700;
    $big->resize($widths, $heights);
    $big->blur(100);
    $img = Image::make($val);
    $width = 200;
    $height = 100;
    $img->resize($width, $height);
    $img->blur(100);
    $uniq = uniqid("img_").$ext;
    $save_path = public_path('img/'.$uniq);
    $save_paths = public_path('big/'.$uniq);
    $img->save($save_path);
    $big->save($save_paths);
    return $uniq;
  }

  public function incrementAllCount($Prefecture_city,$Bland,$body_type,$Region){
    $place = new Prefectures();
    $place->where('name',$Prefecture_city)->increment('count',1);

    $brand = new Brand();
    $brand->where('name',$Bland)->increment('count',1);

    $bodytype = new BodyType();
    $bodytype->where('name',$body_type)->increment('count',1);

    $bodytype = new Region();
    $bodytype->where('name',$Region)->increment('count',1);
  }

  public function decrementAllCount($Prefecture_city,$Bland,$body_type,$Region){
    $place = new Prefectures();
    $place->where('name',$Prefecture_city)->decrement('count',1);

    $brand = new Brand();
    $brand->where('name',$Bland)->decrement('count',1);

    $bodytype = new BodyType();
    $bodytype->where('name',$body_type)->decrement('count',1);

    $bodytype = new Region();
    $bodytype->where('name',$Region)->decrement('count',1);
  }

  public function covertNull($val)
  {
    if($val === null){
      return $valval = '?';
    }elseif($val !== null)
      return $val;
  }

  public function checkNumber($val)
  {
    if(strlen($val) === 3){
      $tests = substr_replace($val,' ',1,0);
       return $test = '• '.$tests;
    }elseif(strlen($val) === 2){
      $tests = substr_replace($val,' ',-2,0);
       return $test = '• '.'•  '.$tests;
    }elseif(strlen($val) === 1){
      $tests = substr_replace($val,' ',-3,0);
      return $test = '• '.'• '.' •'.$tests;
    }else {
      return $test = substr_replace($val,'-',2,0);
    }
  }

  public function maskNumber($val)
  {
    $numberStrlen = strlen($val);
    if(strlen($val) === 3 || strlen($val) === 2 || strlen($val) === 4){
      $trueLength =  $numberStrlen - 1;
      $randTarget = mt_rand(0,$trueLength);
      $result = substr_replace($val, '#',$randTarget,1);
      return $this->checkNumber($result);
    }elseif($numberStrlen === 1){
      $tests = substr_replace($val,' ',-3,0);
      return '• '.'• '.' •'.$tests;
    }
  }

  public function getAfis()
  {
    $section1 = Affiliate::where('sectionFlg',1)->where('size','128')->get();
    $count128 = $section1->count();
    $section2 = Affiliate::where('sectionFlg',1)->where('size','80')->get();
    $count80 = $section2->count();
    return [$section1,$section2,$count128,$count80];
  }

  public function postTwitter()
  {
      $test = Post::orderBy('created_at','desc')->first();
      $connection = new TwitterOAuth(env('CONSUMER_KEY'), env('COMSUMER_CEACRET_KEY'), env('ACCESS_TOKEN'), env('ACCESS_TOKEN_CEACRET'));
      $request = $connection->post("statuses/update", [
          "status" =>
              '新しい煽り運転ナンバーが投稿されました。'. PHP_EOL .
               PHP_EOL .
              $test->Region.' '.$test->Classification.' '.$test->Distinction.' '.$test->maskednumber. PHP_EOL .
              '「'.$test->text.'」'. PHP_EOL .
                PHP_EOL .
              '#煽り運転 #危険運転'. PHP_EOL .
              'https://aoriunten.net/'
      ]);
      
  }


}
