<div class="serch_cardata">
  <form class="" action="{{  url('/serchcardata3')}}" method="post">
    @csrf
    <div class="region_post">
      <div class="form-group d-flex align-items-center">
        <div class="serch_box1 pl-1">
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
        <div class="serch_box3 pl-1">
          <input type="hidden" name="region" value="{{ $title }}">
          <button type="submit" name="button" class="btn btn-primary">検索</button>
        </div>
      </div>
    </div>
  </form>
</div>
