<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;
use App\Region;
use App\Prefectures;
use App\Post;
use App\Http\Services\HomeService;

class RegionListController extends Controller
{
    public function regionList(){
      $Regions =  Region::all();
      foreach ($Regions as $Region) {
        $id[] = $Region->id;
      }
      return view('regionlist',compact('Regions','id'));
    }

    public function getRegion($id){
      $preid = Region::where('code',$id)->get();
      foreach ($preid as $pre) {
        $pre->name;
      }
      $Cardata = Post::where('Region',$pre->name)->orderBy('created_at','desc')->simplePaginate(config('app.paginatecount'));
      $place = $pre->name;

      $HomeService = new HomeService();
      list($mainLoopPcUp,$mainLoopSpUp,$count128,$count80) = $HomeService->getAfis();
      return view('regions.region',compact('Cardata','place','mainLoopPcUp','mainLoopSpUp','count128','count80'));
    }
}
