@include('layouts.head')
<body>
@include('layouts.nav')
<ul id="myTab" class="nav nav-tabs RankingTab" role="tablist">
  <li class="nav-item RankingNav">
    <a href="#home" id="home-tab" class="nav-link active" role="tab" data-toggle="tab" aria-controls="home" aria-selected="true">場所</a>
  </li>
  <li class="nav-item RankingNav">
    <a href="#profile" id="profile-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="profile" aria-selected="false">ブランド</a>
  </li>
  <li class="nav-item RankingNav">
    <a href="#contact" id="contact-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="contact" aria-selected="false">ボディタイプ</a>
  </li>
  <li class="nav-item RankingNav">
    <a href="#region" id="region-tab" class="nav-link" role="tab" data-toggle="tab" aria-controls="region" aria-selected="false">地域名</a>
  </li>
</ul>


<!-- パネル部分 -->
<div id="myTabContent" class="tab-content">
  <div id="home" class="tab-pane active" role="tabpanel" aria-labelledby="home-tab">
    <ul>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-1.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
            <a href="{{ action('PrefecturesController@pre0', $placeId[0])  }}">{{$place[0]}}</a>
          <div class="RankingCount">
            {{$placecount[0]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-2.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
        <a href="{{ action('PrefecturesController@pre0', $placeId[1])  }}">{{$place[1]}}</a>
          <div class="RankingCount">
            {{$placecount[1]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-3.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          <a href="{{ action('PrefecturesController@pre0', $placeId[2])  }}">{{$place[2]}}</a>
          <div class="RankingCount">
            {{$placecount[2]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">4位</span>　
        <div class="PreCountBox">
          <a href="{{ action('PrefecturesController@pre0', $placeId[3])  }}">{{$place[3]}}</a>
          <div class="RankingCount">
            {{$placecount[3]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">5位</span>　
        <div class="PreCountBox">
          <a href="{{ action('PrefecturesController@pre0', $placeId[4])  }}">{{$place[4]}}</a>
          <div class="RankingCount">
            {{$placecount[4]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">6位</span>　
        <div class="PreCountBox">
          <a href="{{ action('PrefecturesController@pre0', $placeId[5])  }}">{{$place[5]}}</a>
          <div class="RankingCount">
            {{$placecount[5]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">7位</span>　
        <div class="PreCountBox">
          <a href="{{ action('PrefecturesController@pre0', $placeId[6])  }}">{{$place[6]}}</a>
          <div class="RankingCount">
            {{$placecount[6]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">8位</span>　
        <div class="PreCountBox">
        <a href="{{ action('PrefecturesController@pre0', $placeId[7])  }}">{{$place[7]}}</a>
          <div class="RankingCount">
            {{$placecount[7]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">9位</span>　
        <div class="PreCountBox">
          <a href="{{ action('PrefecturesController@pre0', $placeId[8])  }}">{{$place[8]}}</a>
          <div class="RankingCount">
            {{$placecount[8]}}件
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div id="profile" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
    <ul>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-1.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$brand[0]}}　
          <div class="RankingCount">
            {{$brandcount[0]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-2.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$brand[1]}}　
          <div class="RankingCount">
            {{$brandcount[1]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-3.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$brand[2]}}　
          <div class="RankingCount">
            {{$brandcount[2]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">4位</span>　
        <div class="PreCountBox">
          {{$brand[3]}}　
          <div class="RankingCount">
            {{$brandcount[3]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">5位</span>　
        <div class="PreCountBox">
          {{$brand[4]}}　
          <div class="RankingCount">
            {{$brandcount[4]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">6位</span>　
        <div class="PreCountBox">
          {{$brand[5]}}　
          <div class="RankingCount">
            {{$brandcount[5]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">7位</span>　
        <div class="PreCountBox">
          {{$brand[6]}}　
          <div class="RankingCount">
            {{$brandcount[6]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">8位</span>　
        <div class="PreCountBox">
          {{$brand[7]}}　
          <div class="RankingCount">
            {{$brandcount[7]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">9位</span>　
        <div class="PreCountBox">
          {{$brand[8]}}　
          <div class="RankingCount">
            {{$brandcount[8]}}件
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div id="contact" class="tab-pane" role="tabpanel" aria-labelledby="contact-tab">
    <ul>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-1.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$bodytype[0]}}　
          <div class="RankingCount">
            {{$bodytypecount[0]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-2.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$bodytype[1]}}　
          <div class="RankingCount">
            {{$bodytypecount[1]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-3.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$bodytype[2]}}　
          <div class="RankingCount">
            {{$bodytypecount[2]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">4位</span>　
        <div class="PreCountBox">
          {{$bodytype[3]}}　
          <div class="RankingCount">
            {{$bodytypecount[3]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">5位</span>　
        <div class="PreCountBox">
          {{$bodytype[4]}}　
          <div class="RankingCount">
            {{$bodytypecount[4]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">6位</span>　
        <div class="PreCountBox">
          {{$bodytype[5]}}　
          <div class="RankingCount">
            {{$bodytypecount[5]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">7位</span>　
        <div class="PreCountBox">
          {{$bodytype[6]}}　
          <div class="RankingCount">
            {{$bodytypecount[6]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">8位</span>　
        <div class="PreCountBox">
          {{$bodytype[7]}}　
          <div class="RankingCount">
            {{$bodytypecount[7]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">9位</span>　
        <div class="PreCountBox">
          {{$bodytype[8]}}　
          <div class="RankingCount">
            {{$bodytypecount[8]}}件
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div id="region" class="tab-pane" role="tabpanel" aria-labelledby="region-tab">
    <ul>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-1.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$region[0]}}　
          <div class="RankingCount">
            {{$regioncount[0]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-2.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$region[1]}}　
          <div class="RankingCount">
            {{$regioncount[1]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><img src="{{  asset('img/f3-3.png') }}" alt="" class="top3">　
        <div class="PreCountBox">
          {{$region[2]}}　
          <div class="RankingCount">
            {{$regioncount[2]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">4位</span>　
        <div class="PreCountBox">
          {{$region[3]}}　
          <div class="RankingCount">
            {{$regioncount[3]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">5位</span>　
        <div class="PreCountBox">
          {{$region[4]}}　
          <div class="RankingCount">
            {{$regioncount[4]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">6位</span>　
        <div class="PreCountBox">
          {{$region[5]}}　
          <div class="RankingCount">
            {{$regioncount[5]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">7位</span>　
        <div class="PreCountBox">
          {{$region[6]}}　
          <div class="RankingCount">
            {{$regioncount[6]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">8位</span>　
        <div class="PreCountBox">
          {{$region[7]}}　
          <div class="RankingCount">
            {{$regioncount[7]}}件
          </div>
        </div>
      </li>
      <li class="d-flex RankingList"><span class="under">9位</span>　
        <div class="PreCountBox">
          {{$region[8]}}　
          <div class="RankingCount">
            {{$regioncount[8]}}件
          </div>
        </div>
      </li>
    </ul>
  </div>
  </div>
</div>

@include('layouts.footer')
