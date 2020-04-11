@include('layouts.head')
  <body>
@include('layouts.nav')
    <!-- Prefectures & SiteDescription -->
    <div class="container pt-3">
      <div class="row">
        <div class="col-sm-12 col-lg-8 right order-sm-2 order-2 order-lg-1">
          <div class="Section_box">
          <h2 class="SectionTitleBox">都道府県リスト</h2>
          <div class="PrefecturesList">
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal1">
                <!-- 切り替えボタンの設定 -->
                <dt class="SizeChange">北海道・東北</dt>
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre1') }}">北海道</a></dd>
                        <dd><a href="{{ url('/prefectures/pre2') }}">青森</a></dd>
                        <dd><a href="{{ url('/prefectures/pre3') }}">岩手</a></dd>
                        <dd><a href="{{ url('/prefectures/pre4') }}">宮城</a></dd>
                        <dd><a href="{{ url('/prefectures/pre5') }}">秋田</a></dd>
                        <dd><a href="{{ url('/prefectures/pre6') }}">山形</a></dd>
                        <dd><a href="{{ url('/prefectures/pre7') }}">福島</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre1') }}">北海道</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre2') }}">青森</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre3') }}">岩手</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre4') }}">宮城</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre5') }}">秋田</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre6') }}">山形</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre7') }}">福島</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal2">
                <dt class="long SizeChange">関東・甲信越</dt>
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre8') }}">茨城</a></dd>
                        <dd><a href="{{ url('/prefectures/pre9') }}">栃木</a></dd>
                        <dd><a href="{{ url('/prefectures/pre10') }}">群馬</a></dd>
                        <dd><a href="{{ url('/prefectures/pre11') }}">埼玉</a></dd>
                        <dd><a href="{{ url('/prefectures/pre12') }}">千葉</a></dd>
                        <dd><a href="{{ url('/prefectures/pre13') }}">東京</a></dd>
                        <dd><a href="{{ url('/prefectures/pre14') }}">神奈川</a></dd>
                        <dd><a href="{{ url('/prefectures/pre15') }}">山梨</a></dd>
                        <dd><a href="{{ url('/prefectures/pre16') }}">長野</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre8') }}">茨城</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre9') }}">栃木</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre10') }}">群馬</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre11') }}">埼玉</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre12') }}">千葉</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre13') }}">東京</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre14') }}">神奈川</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre15') }}">山梨</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre16') }}">長野</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal3">
                <dt class="short SizeChange">北陸</dt>
                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre17') }}">新潟</a></dd>
                        <dd><a href="{{ url('/prefectures/pre18') }}">富山</a></dd>
                        <dd><a href="{{ url('/prefectures/pre19') }}">石川</a></dd>
                        <dd><a href="{{ url('/prefectures/pre20') }}">福井</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre17') }}">新潟</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre18') }}">富山</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre19') }}">石川</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre20') }}">福井</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal4">
                <dt class="short SizeChange">東海</dt>
                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre21') }}">岐阜</a></dd>
                        <dd><a href="{{ url('/prefectures/pre22') }}">静岡</a></dd>
                        <dd><a href="{{ url('/prefectures/pre23') }}">愛知</a></dd>
                        <dd><a href="{{ url('/prefectures/pre24') }}">三重</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre21') }}">岐阜</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre22') }}">静岡</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre23') }}">愛知</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre24') }}">三重</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal5">
                <dt class="short SizeChange">近畿</dt>
                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre25') }}">滋賀</a></dd>
                        <dd><a href="{{ url('/prefectures/pre26') }}">京都</a></dd>
                        <dd><a href="{{ url('/prefectures/pre27') }}">大阪</a></dd>
                        <dd><a href="{{ url('/prefectures/pre28') }}">兵庫</a></dd>
                        <dd><a href="{{ url('/prefectures/pre29') }}">奈良</a></dd>
                        <dd><a href="{{ url('/prefectures/pre30') }}">和歌山</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre25') }}">滋賀</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre26') }}">京都</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre27') }}">大阪</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre28') }}">兵庫</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre29') }}">奈良</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre30') }}">和歌山</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal6">
                <dt class="short SizeChange">中国</dt>
                <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre31') }}">鳥取</a></dd>
                        <dd><a href="{{ url('/prefectures/pre32') }}">島根</a></dd>
                        <dd><a href="{{ url('/prefectures/pre33') }}">岡山</a></dd>
                        <dd><a href="{{ url('/prefectures/pre34') }}">広島</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre31') }}">鳥取</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre32') }}">島根</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre33') }}">岡山</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre34') }}">広島</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal7">
                <dt class="short SizeChange">四国</dt>
                <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre35') }}">徳島</a></dd>
                        <dd><a href="{{ url('/prefectures/pre36') }}">香川</a></dd>
                        <dd><a href="{{ url('/prefectures/pre37') }}">高知</a></dd>
                        <dd><a href="{{ url('/prefectures/pre38') }}">愛媛</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre35') }}">徳島</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre36') }}">香川</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre37') }}">高知</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre38') }}">愛媛</a></dd>
              </dl>
            </div>
            <div class="Prefectures">
              <dl class="sp right_p PrefecturesWrapper" data-toggle="modal" data-target="#exampleModal8">
                <dt class="short2 SizeChange">九州・沖縄</dt>
                <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <dd><a href="{{ url('/prefectures/pre39') }}">山口</a></dd>
                        <dd><a href="{{ url('/prefectures/pre40') }}">福岡</a></dd>
                        <dd><a href="{{ url('/prefectures/pre41') }}">大分</a></dd>
                        <dd><a href="{{ url('/prefectures/pre42') }}">佐賀</a></dd>
                        <dd><a href="{{ url('/prefectures/pre43') }}">熊本</a></dd>
                        <dd><a href="{{ url('/prefectures/pre44') }}">長崎</a></dd>
                        <dd><a href="{{ url('/prefectures/pre45') }}">宮城</a></dd>
                        <dd><a href="{{ url('/prefectures/pre46') }}">鹿児島</a></dd>
                        <dd><a href="{{ url('/prefectures/pre47') }}">沖縄</a></dd>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre39') }}">山口</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre40') }}">福岡</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre41') }}">大分</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre42') }}">佐賀</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre43') }}">熊本</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre44') }}">長崎</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre45') }}">宮城</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre46') }}">鹿児島</a></dd>
                <dd class="sp_hidden"><a href="{{ url('/prefectures/pre47') }}">沖縄</a></dd>
              </dl>
            </div>
          </div>
        </div>
        </div>
        <div class="col-sm-12 col-lg-4 left order-sm-1 order-1 order-lg-2">
          <div class="Section_box">
          <h2 class="SectionTitleBox">煽り運転ニュース</h2>
          <div class="SiteDescription p-2">
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
        <div class="alert alert-light" role="alert"> - 最新投稿 - <strong>5件</strong></div>
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
    <!-- /latestPostData -->
@include('layouts.footer')
