<?php
namespace App\Http\Services;

use App\Post;
use App\Region;
use App\News;
use App\Prefectures;
use Carbon\Carbon;
use App\Brand;
use App\BodyType;
use Intervention\Image\ImageManagerStatic as Image;

class PostService
{
    public function continuousPostCheck($val)
    {
      $day1 = new Carbon();
      $today = $day1->format('Y-m-d');

      $resutl = Post::where('Mainnumber',$val)->where('user_ip',$_SERVER["REMOTE_ADDR"])->orderBy('created_at','desc')->first();

      if($resutl){
        $dt = new Carbon($resutl->created_at);
        $someday = $dt->format('Y-m-d');
        return $data = [
          'someday' => $someday,
          'today'  => $today,
        ];
    }
  }
}



 ?>
