<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Carbon\Carbon;
use App\Http\Services\ItemService;
use Intervention\Image\ImageManagerStatic as Image;

class Item3Controller extends Controller
{
    public function Item3(Request $request)
    {
       $ItemService = new ItemService();
      // $data = $ItemService->checkDate();

      //  if($data['dtNow'] !== $data['latestDateTime']){
        $ItemService = new ItemService();
        $title = config('config.FOURTH_NAME');
        list($json,$n) = $ItemService->rakutenApi(config('config.FOURTH_NAME'),config('app.appId'),config('app.afi'));

        for ($i=0; $i < $n; $i++) {
          if($json['Items'][$i]['Item']['availability'] === 1){
            $alreadyExits = Item::where('code',$json['Items'][$i]['Item']['itemCode'])->exists();
            if($alreadyExits === false){
              $flg = $ItemService->checkItemsFlg($title);
              $item = new item();
              $item->name = $json['Items'][$i]['Item']['itemName'];
              $item->price = $json['Items'][$i]['Item']['itemPrice'];
              $item->code = $json['Items'][$i]['Item']['itemCode'];
              $item->image = $json['Items'][$i]['Item']['mediumImageUrls'][0]['imageUrl'];
              $item->imageSmall = $json['Items'][$i]['Item']['smallImageUrls'][0]['imageUrl'];
              $item->url = $json['Items'][$i]['Item']['affiliateUrl'];
              $item->shopurl = $json['Items'][$i]['Item']['shopAffiliateUrl'];
              $item->reviewCount = $json['Items'][$i]['Item']['reviewCount'];
              $item->reviewAverage = $json['Items'][$i]['Item']['reviewAverage'];
              $item->itemFlg = $flg;

              $img = Image::make($json['Items'][$i]['Item']['mediumImageUrls'][0]['imageUrl']);
              $imgs = Image::make($json['Items'][$i]['Item']['smallImageUrls'][0]['imageUrl']);
              $save_path = public_path('images/'.$json['Items'][$i]['Item']['itemCode'].'.jpg');
              $save_paths = public_path('small/'.$json['Items'][$i]['Item']['itemCode'].'.jpg');
              $img->save($save_path);
              $imgs->save($save_paths);

              $item->imagePath = $json['Items'][$i]['Item']['itemCode'].'.jpg';
             $item->save();
            }
          }elseif ($json['Items'][$i]['Item']['availability'] === 0) {
            Item::where('code',$json['Items'][$i]['Item']['itemCode'])->delete();
          }
        }
      // }

      list($items,$n) = $ItemService->sortItem($request->sort,config('config.FOURTH'));
      return view('item4')->with([
        'items' => $items,
        'n'     => $n,
      ]);
    }
}
