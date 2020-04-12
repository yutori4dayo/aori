@include('layouts.head')
  <body>
@include('layouts.nav')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">危険運転ナンバー登録</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!-- <div class="jumbotron detail"> -->
              <img src="{{  asset('img/number.png') }}" class="PostImage"></li>
            <!-- </div> -->
            <div class="FormBox">
              <form class="" action="{{  url('/data')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="header_post">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="region_post">
                        <div class="form-group">
                          <label>①地域名</label>
                          <input type="text" class="form-control" name="Region" placeholder="品川 「全角漢字orひらがな" value="{{ old('Region') }}" id="disabled">
                        </div>
                        @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                            <li>{{ $errors->first('Region') }}</li>
                            </ul>
                          </div>
                        @endif
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="form-group">
                        <label for="">②分類番号</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="Classification" placeholder="500 「半角数字」" value="{{ old('Classification')}}">
                      </div>
                      @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                          <li> {{ $errors->first('Classification') }}</li>
                          </ul>
                        </div>
                        @endif
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="region_post">
                        <div class="form-group">
                          <label for="">③ひらがな</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="Distinction" placeholder="さ 「全角ひらがな１文字」" value="{{ old('Distinction') }}">
                        </div>
                        @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                            <li> {{ $errors->first('Distinction') }}</li>
                            </ul>
                          </div>
                          @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="body_post">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <small class="PostSupplement">「・・５６」の場合は数字の「５６」のみフォームに入力してください。</small>
                      <div class="form-group">
                        <label for="">④４桁数字<span class="PostSpan">(必須)</span></label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Mainnumber" placeholder="1234 「ハイフンなし半角数字」" value="{{ old('Mainnumber') }}">
                      </div>
                      @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                          <li> {{ $errors->first('Mainnumber') }}</li>
                          </ul>
                        </div>
                        @endif
                    </div>
                    </div>
                  </div>
                <div class="body_post">
                  <div class="row">
                    <div class="col-6 col-sm-4">
                      <div class="region_post">
                        <div class="form-group">
                          <label for="exampleSelect1exampleFormControlSelect1">色</label>
                          <select class="form-control" name="Color" id="exampleFormControlSelect1">
                            <option value="不明">不明</option>
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
                    <div class="col-6 col-sm-4">
                      <div class="form-group">
                        <label for="exampleSelect1exampleFormControlSelect1">ブランド</label>
                        <select class="form-control" name="Bland" id="exampleFormControlSelect2">
                          <option value="不明">不明</option>
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
                    <div class="col-6 col-sm-4">
                      <div class="region_post">
                        <div class="form-group">
                          <label for="exampleSelect1exampleFormControlSelect1">ボディタイプ</label>
                          <select class="form-control" name="bodytype" id="exampleFormControlSelect3">
                            <option value="不明">不明</option>
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
                    <div class="col-6 col-sm-4">
                      <div class="form-group">
                        <label for="exampleSelect1exampleFormControlSelect1 blah">危険運転発生場所<span class="PostSpan blah">(必須)</span></label>
                        <select class="form-control" name="Prefecture_city" id="exampleFormControlSelect1">
                          @foreach($prefectures as $prefecture)
                          <option value="{{ $prefecture->name }}">{{ $prefecture->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">詳細<span class="PostSpan">(必須)</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" placeholder="ナンバーや個人情報の記述は削除対象になります。100文字" value="text"></textarea>
                    </div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                        <li>{{ $errors->first('text') }}</li>
                        </ul>
                      </div>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <small class="PostSupplement">投稿された画像は、自動的にボカし処理されます。</small>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">画像投稿</label>
                          <input type="file" name="car_img">
                    </div>
                  </div>
                </div>
                <button type="btn" class="btn btn-primary">送信する</button>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

@include('layouts.footer')
