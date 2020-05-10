@include('layouts.head')
  <body>
@include('layouts.nav')
    <!-- Prefectures & SiteDescription -->

    @if (session('flash_message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="flash_message text-danger">
            {{ session('flash_message') }}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (session('Regulation_message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="flash_message text-danger">
            {{ session('Regulation_message') }}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <div class="container pt-3">
      <div class="row">
        <div class="col-sm-12 col-lg-8 right order-sm-2 order-2 order-lg-1">
          <div class="Section_box">
          <h2 class="SectionTitleBox">都道府県リスト</h2>
          <div class="PrefecturesList sp_hidden_super">
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal1">
                <!-- 切り替えボタンの設定 -->
                <dt class="SizeChange">北海道・東北</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 1)  }}">北海道</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 2)  }}">青森</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 3)  }}">岩手</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 4)  }}">宮城</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 5)  }}">秋田</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 6)  }}">山形</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 7)  }}">福島</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal2">
                <dt class="long SizeChange">関東・甲信越</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 8)  }}">茨城</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 9)  }}">栃木</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 10)  }}">群馬</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 11)  }}">埼玉</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 12)  }}">千葉</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 13)  }}">東京</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 14)  }}">神奈川</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 19)  }}">山梨</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 20)  }}">長野</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal3">
                <dt class="short SizeChange">北陸</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 15)  }}">新潟</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 16)  }}">富山</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 17)  }}">石川</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 18)  }}">福井</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal4">
                <dt class="short SizeChange">東海</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 21)  }}">岐阜</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 22)  }}">静岡</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 23)  }}">愛知</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 24)  }}">三重</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal5">
                <dt class="short SizeChange">近畿</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 25)  }}">滋賀</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 26)  }}">京都</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 27)  }}">大阪</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 28)  }}">兵庫</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 29)  }}">奈良</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 30)  }}">和歌山</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal6">
                <dt class="short SizeChange">中国</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 31)  }}">鳥取</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 32)  }}">島根</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 33)  }}">岡山</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 34)  }}">広島</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal7">
                <dt class="short SizeChange">四国</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 36)  }}">徳島</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 37)  }}">香川</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 39)  }}">高知</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 38)  }}">愛媛</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal8">
                <dt class="short2 SizeChange">九州・沖縄</dt>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 35)  }}">山口</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 40)  }}">福岡</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 44)  }}">大分</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 41)  }}">佐賀</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 43)  }}">熊本</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 42)  }}">長崎</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 45)  }}">宮城</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 46)  }}">鹿児島</a></dd>
                <dd class="sp_hidden"><a href="{{ action('PrefecturesController@pre0', 47)  }}">沖縄</a></dd>
              </dl>
            </div>
          </div>
          <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                    <dt class="SizeChange">北海道・東北</dt>
                  </a>
                </h5>
              </div><!-- /.card-header -->
              <div id="collapseOne" class="collapse data-parent" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div class="">
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 1)  }}">北海道</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 2)  }}">青森</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 3)  }}">岩手</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 4)  }}">宮城</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 5)  }}">秋田</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 6)  }}">山形</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 7)  }}">福島</a></dd>
                  </div>
                </div><!-- /.card-body -->
              </div><!-- /.collapse -->
            </div><!-- /.card -->
            <div class="card">
              <div class="card-header" role="tab" id="headingtwo">
                <h5 class="mb-0">
                  <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapsetow" role="button" aria-expanded="true" aria-controls="collapsetow">
                    <dt class="long SizeChange">関東・甲信越</dt>
                  </a>
                </h5>
              </div><!-- /.card-header -->
              <div id="collapsetow" class="collapse data-parent" role="tabpanel" aria-labelledby="headingtwo" data-parent="#accordion">
                <div class="card-body">
                  <div class="">
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 8)  }}">茨城</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 9)  }}">栃木</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 10)  }}">群馬</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 11)  }}">埼玉</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 12)  }}">千葉</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 13)  }}">東京</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 14)  }}">神奈川</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 19)  }}">山梨</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 20)  }}">長野</a></dd>
                  </div>
                </div><!-- /.card-body -->
              </div><!-- /.collapse -->
            </div><!-- /.card -->
            <div class="card">
              <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                  <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="true" aria-controls="collapseThree">
                    <dt class="short SizeChange">北陸</dt>
                  </a>
                </h5>
              </div><!-- /.card-header -->
              <div id="collapseThree" class="collapse data-parent" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <div class="">
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 15)  }}">新潟</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 16)  }}">富山</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 17)  }}">石川</a></dd>
                    <dd class=""><a href="{{ action('PrefecturesController@pre0', 18)  }}">福井</a></dd>
                  </div>
              </div><!-- /.collapse -->
            </div><!-- /.card -->
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingtwo">
              <h5 class="mb-0">
                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="true" aria-controls="collapse4">
                  <dt class="short SizeChange">東海</dt>
                </a>
              </h5>
            </div><!-- /.card-header -->
            <div id="collapse4" class="collapse data-parent" role="tabpanel" aria-labelledby="headingtow" data-parent="#accordion">
              <div class="card-body">
                <div class="">
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 21)  }}">岐阜</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 22)  }}">静岡</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 23)  }}">愛知</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 24)  }}">三重</a></dd>
                </div>
            </div><!-- /.collapse -->
          </div><!-- /.card -->
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingtwo">
              <h5 class="mb-0">
                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="true" aria-controls="collapse5">
                  <dt class="short SizeChange">近畿</dt>
                </a>
              </h5>
            </div><!-- /.card-header -->
            <div id="collapse5" class="collapse data-parent" role="tabpanel" aria-labelledby="headingtow" data-parent="#accordion">
              <div class="card-body">
                <div class="">
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 25)  }}">滋賀</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 26)  }}">京都</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 27)  }}">大阪</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 28)  }}">兵庫</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 29)  }}">奈良</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 30)  }}">和歌山</a></dd>
                </div>
            </div><!-- /.collapse -->
          </div><!-- /.card -->
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingtwo">
              <h5 class="mb-0">
                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse6" role="button" aria-expanded="true" aria-controls="collapse6">
                  <dt class="short SizeChange">中国</dt>
                </a>
              </h5>
            </div><!-- /.card-header -->
            <div id="collapse6" class="collapse data-parent" role="tabpanel" aria-labelledby="headingtow" data-parent="#accordion">
              <div class="card-body">
                <div class="">
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 36)  }}">徳島</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 37)  }}">香川</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 39)  }}">高知</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 38)  }}">愛媛</a></dd>
                </div>
            </div><!-- /.collapse -->
          </div><!-- /.card -->
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingtwo">
              <h5 class="mb-0">
                <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="true" aria-controls="collapse8">
                  <dt class="short2 SizeChange">九州・沖縄</dt>
                </a>
              </h5>
            </div><!-- /.card-header -->
            <div id="collapse8" class="collapse data-parent" role="tabpanel" aria-labelledby="headingtow" data-parent="#accordion">
              <div class="card-body">
                <div class="">
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 35)  }}">山口</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 40)  }}">福岡</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 44)  }}">大分</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 41)  }}">佐賀</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 43)  }}">熊本</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 42)  }}">長崎</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 45)  }}">宮城</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 46)  }}">鹿児島</a></dd>
                  <dd class=""><a href="{{ action('PrefecturesController@pre0', 47)  }}">沖縄</a></dd>
                </div>
            </div><!-- /.collapse -->
          </div><!-- /.card -->
          </div>
          </div><!-- /#accordion -->
        </div>
        </div>
        <div class="col-sm-12 col-lg-4 left order-sm-1 order-1 order-lg-2">
          <div class="Section_box">
          <h2 class="SectionTitleBox">ランキング　{{$dtNow}}</h2>
          <div class="SiteDescription p-2">
            <p>ボディタイプ　1位:　{{$getFirstPlaceAll['BodyType']['name']}}　{{$getFirstPlaceAll['BodyType']['count']}}件</p>
            <p>地域ナンバー　1位:　<a href="{{ action('RegionListController@getRegion', $getFirstPlaceAll['Region']['code'])  }}">{{$getFirstPlaceAll['Region']['name']}}{{'ナンバー'}}</a>　{{$getFirstPlaceAll['Region']['count']}}件</p>
            <p>　　発生場所　1位:　<a href="{{ action('PrefecturesController@pre0',$getFirstPlaceAll['Pre']['code'] )  }}">{{$getFirstPlaceAll['Pre']['name']}}</a>　{{$getFirstPlaceAll['Pre']['count']}}件</p>
            <p>　　ブランド　1位:　{{$getFirstPlaceAll['Brand']['name']}}　{{$getFirstPlaceAll['Brand']['count']}}件</p>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- /.Prefectures & SiteDescription -->
    <!-- latestPostData -->
    <div class="container mb-5 maincontainersp">
      <div class="row">
        <div class="col-12">
          <ul class="float-sm-right">
            <li class=""><a href="{{ url('/post') }}">
                <button type="button" name="button" class="btn btn-danger">ナンバー投稿</button>
            </a></li>
          </ul>
        </div>
        <div class="alert alert-light" role="alert"> - 投稿数 - <strong>@if(isset($allCountPost)){{$allCountPost}}@endif件</strong></div>
        <div class="col-12">
          @foreach($Cardata as $item)
          <section class="Section_box">
            <div class="SectionTitleBox d-flex">
              <h2 class="SectionTitle"><b>{{$item->Prefecture_city}}</b></h2>
              <time class="ml-auto">{{$item->created_at}}</time>
              @if($item->delete_key)
              <form class="" action="{{ action('HomeController@deletePost') }}" method="get" id="delete_key">
                <input type="text" name="delete_key" value="">
                <input type="hidden" name="id" value="{{$item->id}}">
                <button type="submit" name="">送信</button>
              </form>
              <a href="{{action('HomeController@confirmDelete',$item->id)}}"><i class="far fa-trash-alt p-1"></i></a>
              @endif
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
                    <li class="list-item plate Mainnumber1">{{$item->maskednumber}}</li>
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
                  <li class="Textlist"><a href="{{ action('HomeController@carimage', $item->id) }}"><img src="{{  asset('img/'.$item->car_img) }}" class="noimage"></a></li>
                  @endif
                  <li class="list-item text_area"><p>{{ $item->text}}</p></li>
                </ul>
              </div>
            </div>
          </section>
          @if($loop->iteration === 5)
            @include('layouts.loop_afi',['title' => $afi1])
          @endif
          @endforeach
          <div class="PaginateBox">
            <div class="Paginateinner">
                    {{ $Cardata->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /latestPostData -->
@include('layouts.footer')
