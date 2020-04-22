@include('layouts.head')
  <body>
@include('layouts.nav')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h2 class="m-0">あおり運転ナンバー登録</h1>
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
                          <label for="exampleSelect1exampleFormControlSelect1">①地域名</label>
                          <select class="form-control" name="Region" id="mySelect2">
                            <option value="不明">不明</option>
                            @foreach($regions as $region)
                            <option value="{{$region->name}}" value="{{ old('Region') }}">{{$region->name}}</option>
                            @endforeach
                          </select>
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
                          @foreach($brands as $brand)
                          <option value="{{$brand->name}}">{{$brand->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4">
                      <div class="region_post">
                        <div class="form-group">
                          <label for="exampleSelect1exampleFormControlSelect1">ボディタイプ</label>
                          <select class="form-control" name="bodytype" id="exampleFormControlSelect3">
                            <option value="不明">不明</option>
                            @foreach($bodytypes as $bodytype)
                            <option value="{{$bodytype->name}}">{{$bodytype->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4">
                      <div class="form-group">
                        <label for="exampleSelect1exampleFormControlSelect1 blah">あおり運転発生場所<span class="PostSpan blah">(必須)</span></label>
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
                  <div class="col-12 col-md-6">
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
                  <div class="col-12 col-md-6">
                    <div class="">
                      <div class="form-group">
                        <label for="">削除key</label><span class="text-danger">　設定しない場合は投稿を削除できません。</span>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="delete_key" placeholder="４桁半角数字" value="{{ old('delete_key') }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <small class="PostSupplement">投稿された画像は、自動的にボカし処理されます。</small>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">画像投稿</label>
                          <input type="file" name="car_img" onchange="previewFile()">
                          <img src="{{  asset('img/noimage.png') }}" height="200" alt="Image preview..." id="target">
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
