@extends('layouts.head')
<body>
@include('layouts.nav')

  {{--  serch cardata section  --}}

  <!-- 都道府県車検索modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{$place.'ナンバー'}}：あおり運転ナンバー検索</h5>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="serch_cardata">
                  <form class="" action="{{  url('/serchcardata')}}" method="post">
                    @csrf
                      <div class="form-group">
                        <div class="form-group d-flex align-items-center">
                          <div class="serch_box1 pl-1">
                            <label for="exampleSelect1exampleFormControlSelect1">　　　　　色</label>
                          </div>
                          <div class="serch_box2 pl-1">
                        <select class="form-control target" name="Color" id="exampleFormControlSelect1">
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
                        <div class="serch_box3 pl-1">
                          <input type="hidden" name="region" value="{{ $place }}">
                          <input type="hidden" name="fromRegionSearch" value="1">
                          <button type="submit" name="button" class="btn btn-primary">検索</button>
                        </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
              <div class="col-12">
                <div class="serch_cardata">
                  <form class="" action="{{  url('/serchcardata2')}}" method="post">
                    @csrf
                    <div class="form-group d-flex align-items-center">
                      <div class="serch_box1 pl-1">
                      <label for="exampleSelect1exampleFormControlSelect1">　　ブランド</label>
                      </div>
                      <div class="serch_box2 pl-1">
                      <select class="form-control target" name="Bland" id="exampleFormControlSelect2">
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
                      <div class="serch_box3 pl-1">
                      <input type="hidden" name="region" value="{{ $place }}">
                      <input type="hidden" name="fromRegionSearch" value="1">
                      <button type="submit" name="button" class="btn btn-primary">検索</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-12">
                <div class="serch_cardata">
                  <form class="" action="{{  url('/serchcardata3')}}" method="post">
                    @csrf
                    <div class="region_post">
                      <div class="form-group d-flex align-items-center">
                        <div class="serch_box1 pl-1">
                          <label for="exampleSelect1exampleFormControlSelect1">ボディタイプ</label>
                        </div>
                        <div class="serch_box2 pl-1">
                          <select class="form-control target" name="bodytype" id="exampleFormControlSelect3">
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
                        <div class="serch_box3 pl-1">
                          <input type="hidden" name="region" value="{{ $place }}">
                          <input type="hidden" name="fromRegionSearch" value="1">
                          <button type="submit" name="button" class="btn btn-primary">検索</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-12">
                <div class="serch_cardata">
                  <form class="" action="{{  url('/serchcardata4')}}" method="post">
                    @csrf
                    <div class="region_post">
                      <div class="form-group d-flex align-items-center">
                        <div class="serch_box1 pl-1">
                          <label for="exampleSelect1exampleFormControlSelect1">ナンバー検索</label>
                        </div>
                        <div class="serch_box2 pl-1">
                          <input type="number" name="car_number" value="">
                        </div>
                        <div class="serch_box3 pl-1">
                          <input type="hidden" name="region" value="{{ $place }}">
                          <input type="hidden" name="fromRegionSearch" value="1">
                          <button type="submit" name="button" class="btn btn-primary">検索</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        </div>
      </div>
    </div>
  </div>

  {{--  /serch cardata section  --}}


  {{--  place name section  --}}

    @include('layouts.place_title',['title'=>$place.'ナンバー'])

  {{--  /place name section  --}}


  {{--  cardata main section  --}}

    @include('layouts.cardata_main')

  {{--  /cardata main section  --}}




@include('layouts.footer')
