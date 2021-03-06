@extends('layouts.head')
  <body>
@include('layouts.nav')
<div class="container bg-light p-3">
  <ul id="myTab" class="nav nav-tabs" role="tablist">
    <li class="nav-item regionlist_plus">
      <a href="#area1" id="tab1" class="nav-link regionlist active" role="tab" data-toggle="tab" aria-controls="area1" aria-selected="true">北海道/東北</a>
    </li>
    <li class="nav-item regionlist_plus">
      <a href="#area2" id="tab2" class="nav-link regionlist" role="tab" data-toggle="tab" aria-controls="area2" aria-selected="false">関東</a>
    </li>
    <li class="nav-item regionlist_plus">
      <a href="#area3" id="tab3" class="nav-link regionlist" role="tab" data-toggle="tab" aria-controls="area3" aria-selected="false">中部</a>
    </li>
    <li class="nav-item regionlist_plus">
      <a href="#area4" id="tab4" class="nav-link regionlist" role="tab" data-toggle="tab" aria-controls="area4" aria-selected="false">関西</a>
    </li>
    <li class="nav-item regionlist_plus">
      <a href="#area5" id="tab5" class="nav-link regionlist" role="tab" data-toggle="tab" aria-controls="area5" aria-selected="false">中国</a>
    </li>
    <li class="nav-item regionlist_plus">
      <a href="#area6" id="tab6" class="nav-link regionlist" role="tab" data-toggle="tab" aria-controls="area6" aria-selected="false">四国</a>
    </li>
    <li class="nav-item regionlist_plus">
      <a href="#area7" id="tab7" class="nav-link regionlist" role="tab" data-toggle="tab" aria-controls="area7" aria-selected="false">九州/沖縄</a>
    </li>
  </ul>
  <div id="myTabContent" class="tab-content mt-3">
  <div id="area1" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
    <div class="over_wrap">
      <div class="wrap_section1">
         <section class="preSeciton">
           <h3>北海道</h3>
           <ul>
             @for ($i = 0; $i <= 8; $i++)
             <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
             @endfor
           </ul>
         </section>
         <section class="preSeciton">
           <h3>青森</h3>
           <ul>
             @for ($i = 9; $i <= 11; $i++)
              <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
             @endfor
           </ul>
         </section>
        <section class="preSeciton">
          <h3>岩手</h3>
          <ul>
            @for ($i = 12; $i <= 14; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
            @endfor
          </ul>
        </section>
      </div>
      <div class="wrap_section2">
        <section class="preSeciton">
          <h3>宮城</h3>
          <ul>
            @for ($i = 15; $i <= 16; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
            @endfor
          </ul>
        </section>
        <section class="preSeciton">
          <h3>秋田</h3>
          <ul>
            @for ($i = 17; $i <= 17; $i++)
             <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
            @endfor
          </ul>
        </section>
        <section class="preSeciton">
          <h3>山形</h3>
          <ul>
            @for ($i = 18; $i <= 19; $i++)
             <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
            @endfor
          </ul>
        </section>
        <section class="preSeciton">
          <h3>福島</h3>
          <ul>
            @for ($i = 20; $i <= 24; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
            @endfor
          </ul>
        </section>
      </div>
    </div>
  </div>
  <div id="area2" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
    <div class="over_wrap">
      <section class="preSeciton">
      <h3>茨城</h3>
      <ul>
        @for ($i = 25; $i <= 27; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
      </section>
      <section class="preSeciton">
        <h3>栃木</h3>
        <ul>
          @for ($i = 28; $i <= 30; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>群馬</h3>
        <ul>
          @for ($i = 31; $i <= 33; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>埼玉</h3>
        <ul>
          @for ($i = 34; $i <= 40; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>千葉</h3>
        <ul>
          @for ($i = 41; $i <= 50; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>東京</h3>
        <ul>
          @for ($i = 51; $i <= 60; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>神奈川</h3>
        <ul>
          @for ($i = 61; $i <= 64; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
    </div>
  </div>
  <div id="area3" class="tab-pane" role="tabpanel" aria-labelledby="tab3">
    <section class="preSeciton">
      <h3>山梨</h3>
      <ul>
        @for ($i = 65; $i <= 66; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>新潟</h3>
      <ul>
        @for ($i = 67; $i <= 69; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>長野</h3>
      <ul>
        @for ($i = 70; $i <= 72; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>富山</h3>
      <ul>
        @for ($i = 73; $i <= 73; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>石川</h3>
      <ul>
        @for ($i = 74; $i <= 75; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>福井</h3>
      <ul>
        @for ($i = 76; $i <= 76; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>岐阜</h3>
      <ul>
        @for ($i = 77; $i <= 78; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>静岡</h3>
      <ul>
        @for ($i = 79; $i <= 83; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>愛知</h3>
      <ul>
        @for ($i = 84; $i <= 92; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
  </div>
  <div id="area4" class="tab-pane" role="tabpanel" aria-labelledby="tab4">
    <section class="preSeciton">
      <h3>三重</h3>
      <ul>
        @for ($i = 93; $i <= 95; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>滋賀</h3>
      <ul>
        @for ($i = 96; $i <= 96; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>京都</h3>
      <ul>
        @for ($i = 97; $i <= 97; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>大阪</h3>
      <ul>
        @for ($i = 98; $i <= 101; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>奈良</h3>
      <ul>
        @for ($i = 102; $i <= 103; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>和歌山</h3>
      <ul>
        @for ($i = 104; $i <= 104; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>兵庫</h3>
      <ul>
        @for ($i = 105; $i <= 106; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
  </div>
  <div id="area5" class="tab-pane" role="tabpanel" aria-labelledby="tab5">
    <section class="preSeciton">
      <h3>鳥取</h3>
      <ul>
        @for ($i = 107; $i <= 107; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>島根</h3>
      <ul>
        @for ($i = 108; $i <= 109; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>岡山</h3>
      <ul>
        @for ($i = 110; $i <= 111; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>広島</h3>
      <ul>
        @for ($i = 112; $i <= 113; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>山口</h3>
      <ul>
        @for ($i = 114; $i <= 115; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
  </div>
  <div id="area6" class="tab-pane" role="tabpanel" aria-labelledby="tab6">
    <section class="preSeciton">
      <h3>徳島</h3>
      <ul>
        @for ($i = 116; $i <= 116; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>香川</h3>
      <ul>
        @for ($i = 117; $i <= 118; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>愛媛</h3>
      <ul>
        @for ($i = 119; $i <= 119; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
    <section class="preSeciton">
      <h3>高知</h3>
      <ul>
        @for ($i = 120; $i <= 120; $i++)
          <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
        @endfor
      </ul>
    </section>
  </div>
    <div id="area7" class="tab-pane" role="tabpanel" aria-labelledby="tab7">
      <section class="preSeciton">
        <h3>福岡</h3>
        <ul>
          @for ($i = 121; $i <= 124; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>佐賀</h3>
        <ul>
          @for ($i = 125; $i <= 125; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>長崎</h3>
        <ul>
          @for ($i = 126; $i <= 127; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>熊本</h3>
        <ul>
          @for ($i = 128; $i <= 128; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>大分</h3>
        <ul>
          @for ($i = 129; $i <= 129; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>宮崎</h3>
        <ul>
          @for ($i = 130; $i <= 130; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>鹿児島</h3>
        <ul>
          @for ($i = 131; $i <= 132; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
      <section class="preSeciton">
        <h3>沖縄</h3>
        <ul>
          @for ($i = 133; $i <= 133; $i++)
            <li><a href="{{ action('RegionListController@getRegion', $id[$i])  }}">{{$Regions[$i]['name']}}ナンバー</a>　{{$Regions[$i]['count']}}件</li>
          @endfor
        </ul>
      </section>
    </div>
</div>
</div>
@include('layouts.footer')
