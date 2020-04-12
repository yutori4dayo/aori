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
          <input type="hidden" name="region" value="{{ $title }}">
          <button type="submit" name="button" class="btn btn-primary">検索</button>
        </div>
        </div>
      </div>
  </form>
</div>
