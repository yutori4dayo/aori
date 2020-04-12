<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-12">
      <ul class="float-sm-right d-flex">
        <li class=""><button type="button" class="btn btn-primary prebtn" data-toggle="modal" data-target="#staticBackdrop">
          {{$place}}：車検索
        </button></li>
        <li class=""><a href="{{ url('/post') }}">
            <button type="button" name="button" class="btn btn-danger PostBtn prebtn">ナンバー投稿</button>
        </a></li>
      </ul>
    </div>
    @include('layouts.loop_post')
  </div>
</div>
