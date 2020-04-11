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
          <input type="hidden" name="region" value="{{ $title }}">
          <button type="submit" name="button" class="btn btn-primary">検索</button>
        </div>
      </div>
    </div>
  </form>
</div>
