@include('layouts.head')
  <body>
@include('layouts.nav')

<div class="container">
  <div class="row">
    <!-- <div class="serch_cardata"> -->
      <form class="form" action="{{  url('/all')}}" method="post">
      @csrf
      <div class="col-12 pb-2">
        <div class="region_post">
          <div class="serch_box1">
            <label for="exampleSelect1exampleFormControlSelect1">危険運転発生場所</label>
          </div>
          <div class="serch_box2 pl-1">
            <select class="form-control" name="Prefecture_city" id="exampleFormControlSelect1">
              @if(isset($prefectures))
              @foreach($prefectures as $prefecture)
              <option value="{{ $prefecture->name }}">{{ $prefecture->name }}</option>
              @endforeach
              @endif
            </select>
          </div>
        </div>
      </div>
        <!-- <div class="form-group"> -->
          <div class="col-12 pb-2">
            <div class="region_post">
              <div class="serch_box1">
                <label for="exampleSelect1exampleFormControlSelect1">色</label>
              </div>
              <div class="serch_box2 pl-1">
                <select class="form-control" name="Color" id="exampleFormControlSelect1">
                  <option value="白">白</option>
                  <option value="黒">黒</option>
                  <option value="銀">銀</option>
                  <option value="青">青</option>
                  <option value="赤">赤</option>
                  <option value="茶">茶</option>
                  <option value="灰">灰</option>
                  <option value="黄">黄</option>
                  <option value="緑">緑</option>
                  <option value="その他">その他</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 pb-2">
            <div class="region_post">
              <div class="serch_box1">
                <label for="exampleSelect1exampleFormControlSelect1">ブランド</label>
              </div>
              <div class="serch_box2 pl-1">
                <select class="form-control" name="Bland" id="exampleFormControlSelect2">
                  <option value="トヨタ">トヨタ</option>
                  <option value="レクサス">レクサス</option>
                  <option value="ニッサン">ニッサン</option>
                  <option value="ホンダ">ホンダ</option>
                  <option value="マツダ">マツダ</option>
                  <option value="スバル">スバル</option>
                  <option value="三菱">三菱</option>
                  <option value="スズキ">スズキ</option>
                  <option value="ダイハツ">ダイハツ</option>
                  <option value="BMW">BMW</option>
                  <option value="アウディ">アウディ</option>
                  <option value="ベンツ">ベンツ</option>
                  <option value="フォルクスワーゲン">フォルクスワーゲン</option>
                  <option value="MINI">MINI</option>
                  <option value="シエトロン">シエトロン</option>
                  <option value="ジープ">ジープ</option>
                  <option value="ジャガー">ジャガー</option>
                  <option value="ルノー">ルノー</option>
                  <option value="シボレー">シボレー</option>
                  <option value="フィアット・アバルト">フィアット・アバルト</option>
                  <option value="ランドローバー">ランドローバー</option>
                  <option value="キャデラック">キャデラック</option>
                  <option value="プジョー">プジョー</option>
                  <option value="ポルシェ">ポルシェ</option>
                  <option value="アルファロメオ">アルファロメオ</option>
                  <option value="いすゞ">いすゞ</option>
                  <option value="日野">日野</option>
                  <option value="三菱ふそう">三菱ふそう</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-12 pb-2">
            <div class="region_post">
              <div class="serch_box1">
                <label for="exampleSelect1exampleFormControlSelect1">ボディタイプ</label>
              </div>
              <div class="serch_box2 pl-1">
                <select class="form-control" name="bodytype" id="exampleFormControlSelect3">
                  <option value="セダン">セダン</option>
                  <option value="軽自動車">軽自動車</option>
                  <option value="コンパクトカー">コンパクトカー</option>
                  <option value="ミニバン">ミニバン</option>
                  <option value="ステーションワゴン">ステーションワゴン</option>
                  <option value="SUV">SUV</option>
                  <option value="クーペ">クーペ</option>
                  <option value="ハッチバック">ハッチバック</option>
                  <option value="オープンカー">オープンカー</option>
                </select>
              </div>
            </div>
          </div>
          <div class="serch_box3 pl-4">
            <button type="submit" name="button" class="btn btn-primary">検索</button>
          </div>
        <!-- </div> -->
      </form>
    <!-- </div> -->
  </div>
</div>

  <!-- <div class="serch_cardata"> -->
    <div class="container">
      <div class="row">
          <form class="form" action="{{  url('/all')}}" method="post">
            @csrf
            <!-- <div class="region_post"> -->
              <div class="form-group d-flex align-items-center">
                <div class="col-12">
                  <div class="serch_box1 pl-1">
                    <label for="exampleSelect1exampleFormControlSelect1">ナンバー検索</label>
                  </div>
                  <div class="serch_box3 pl-1">
                    <input type="text" class="form-control" id="exampleInputPassword1" name="Mainnumber" placeholder="1234 「ハイフンなし半角数字」">
                    <button type="submit" name="button" class="btn btn-primary">検索</button>
                  </div>
                </div>
              </div>
            <!-- </div> -->
          </form>
      </div>
    </div>
  <!-- </div> -->
@if(isset($Cardata))
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="alert alert-light" role="alert"><strong>{{$count}}件見つかりました</strong></div>
    <div class="col-12">
      @foreach($Cardata as $item)
      <section class="Section_box">
        <div class="SectionTitleBox d-flex">
          <h2 class="SectionTitle"><b>{{$item->Prefecture_city}}</b></h2>
          <time class="ml-auto">{{$item->created_at}}</time>
        </div>
        <div class="latestPostData">
          <div class="spbox">
            <div class="box ml-2 mb-2 pt-5">
              <ul class="list d-flex">
                @if(strlen($item->Region) > 9)
                <li class="list-item plate Region1 strlenover">
                  @if($item->Region === NULL)
                  {{ '不明'}}
                  @else
                  {{ $item->Region}}
                  @endif
                </li>
                @elseif(strlen($item->Region) > 6)
                <li class="list-item plate Region1 strlen">
                  @if($item->Region === NULL)
                  {{ '不明'}}
                  @else
                  {{ $item->Region}}
                  @endif
                </li>
                @else
                <li class="list-item plate Region1">
                  @if($item->Region === NULL)
                  {{ '不明'}}
                  @else
                  {{ $item->Region}}
                  @endif
                </li>
                @endif
                <li class="list-item plate Classification1">@if($item->Classification === NULL){{ '不明'}}@else{{ $item->Classification}}@endif</li>
                <li class="list-item plate Distinction1">@if($item->Distinction === NULL){{ '不明'}}@else{{ $item->Distinction}}@endif</li>
                <li class="list-item plate Mainnumber1">{{$item->Mainnumber}}</li>
              </ul>
            </div>
            <ul class="list header_list">
              <li class="list-item">場所:@if($item->Prefecture_city === NULL){{ '不明'}}@else{{ $item->Prefecture_city}}@endif</li>
              <li class="list-item">色　:@if($item->Color === NULL){{ '不明'}}@else{{ $item->Color}}@endif</li>
              <li class="list-item">車種:
                @if($item->bodytype === NULL)
                {{ '不明'}}
                @elseif($item->bodytype === 'ステーションワゴン')
                <span class="ChangeSize">{{ 'ステーションワゴン' }}</span>
                @else
                {{ $item->bodytype}}
                @endif</li>
              <li class="list-item">ブランド:
                @if($item->Bland === NULL)
                {{ '不明'}}
                @elseif($item->Bland === 'フィアット・アバルト')
                <span class="ChangeSize">{{ 'フィアット・アバルト' }}</span>
                @else
                {{ $item->Bland}}
                @endif</li>
            </ul>
          </div>
          <div class="pic_text_box">
            <ul class="pic_text_box_list">
              @if($item->car_img === null)
              <li class="Textlist"><img src="{{  asset('img/noimage.png') }}" class="noimage"></li>
              @else
              <li class="Textlist"><a href="{{ action('HomeController@carimage', $item->id) }}"><img src="{{  asset('img/'.$item->car_img) }}" class="image"></a></li>
              @endif
              <li class="list-item text_area">{{ $item->text}}</li>
            </ul>
          </div>
        </div>
      </section>
      @endforeach
    </div>
  </div>
</div>
@include('layouts.footer')
@endif
