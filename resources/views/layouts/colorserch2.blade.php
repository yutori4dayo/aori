<div class="serch_cardata">
  <form class="" action="{{  url('/serchcardata2')}}" method="post">
    @csrf
    <div class="form-group d-flex align-items-center">
      <div class="serch_box1 pl-1">
      <label for="exampleSelect1exampleFormControlSelect1">　　ブランド</label>
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
      <div class="serch_box3 pl-1">
      <input type="hidden" name="region" value="{{ $title }}">
      <button type="submit" name="button" class="btn btn-primary">検索</button>
      </div>
    </div>
  </form>
</div>
