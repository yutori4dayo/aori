<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$title}}：危険運転ナンバー検索</h5>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-12">
              @include('layouts.colorserch',['Prefecture_city'=>'{{$place}}'])
            </div>
            <div class="col-12">
              @include('layouts.colorserch2',['Prefecture_city'=>'{{$place}}'])
            </div>
            <div class="col-12">
              @include('layouts.colorserch3',['Prefecture_city'=>'{{$place}}'])
            </div>
            <div class="col-12">
              @include('layouts.colorserch4',['Prefecture_city'=>'{{$place}}'])
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
