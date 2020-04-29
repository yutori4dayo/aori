<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\BodyType;
use App\Region;
use App\Prefectures;

class RankingController extends Controller
{
    public function placeranking(){
      $place_rankings = Prefectures::orderBy('count', 'desc')->take(10)->get();
      foreach ($place_rankings as $place_ranking) {
        $place[] =$place_ranking->name;
        $placeId[] =$place_ranking->code;
        $placecount[] = $place_ranking->count;
      }
      $brand_rankings = Brand::orderBy('count', 'desc')->take(10)->get();
      foreach ($brand_rankings as $brand_ranking) {
        $brand[] =$brand_ranking->name;
        $brandcount[] = $brand_ranking->count;
      }
      $bodytype_rankings = BodyType::orderBy('count', 'desc')->take(10)->get();
      foreach ($bodytype_rankings as $bodytype_ranking) {
        $bodytype[] =$bodytype_ranking->name;
        $bodytypecount[] = $bodytype_ranking->count;
      }
      $region_rankings = Region::orderBy('count', 'desc')->take(10)->get();
      foreach ($region_rankings as $region_ranking) {
        $code[] = $region_ranking->code;
        $region[] =$region_ranking->name;
        $regioncount[] = $region_ranking->count;
      }
      $ranking = 'あおり運転ランキング';
      return view('placeranking',compact('place','brand','bodytype','placecount','brandcount','bodytypecount','region','regioncount','placeId','code','ranking'));
    }
}
