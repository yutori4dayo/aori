<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Prefectures;
use App\Post;

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
      // dd($place,$Cardata);
      return view('regions.region',compact('Cardata','place'));
    }
}
