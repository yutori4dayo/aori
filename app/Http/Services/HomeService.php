<?php

namespace App\Http\Services;

 use App\Post;
 use App\News;
 use App\NewsContents;

class HomeService
{

  public function getNews()
  {
    $today = date("Y-m-d");
    $firstday = News::latest()->first();

    if($firstday->memory_time !== $today){
      $todays = date("Y-m-d");
      $news = new News();
      $news->memory_time = $todays;
      $news->save();

      $url = file_get_contents('https://newsapi.org/v2/everything?q=煽り運転&from='."$todays".'&sortBy=publishedAt&apiKey=98428a9836a74a99afb13134cba73d0a');
      $json = json_decode($url,true);
      $n =  count($json['articles']);

      for ($i=0; $i < $n; $i++) {
        $title =$json['articles'][$i]['title'];
        $url = $json['articles'][$i]['url'];
        $published_at = $json['articles'][$i]['publishedAt'];
        $published_ats = substr($published_at,0,10);
        $firstday = News::latest()->first();
        $new = new NewsContents();
        $new->title = $title;
        $new->url = $url;
        $new->published_at = $published_ats;
        $new->news_id = $firstday->id;
        $new->save();
      }
    }
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

}
