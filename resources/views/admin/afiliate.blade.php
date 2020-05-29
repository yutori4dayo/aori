@include('layouts.head')
    <div class="container m-5">
      <form class="" action="{{ action('ManagerController@afi')}}" method="post">
        @csrf
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input type="text" name="url" value="" placeholder="url" class="w-100">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input type="text" name="name" value="" placeholder="name" class="w-100">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="exampleSelect1exampleFormControlSelect1">サイズ</label>
                <select class="form-control" name="size" id="mySelect">
                  <option value="128">128*128 パソコン</option>
                  <option value="80">80*80 スマートフォン</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="exampleSelect1exampleFormControlSelect1">セクション</label>
                <select class="form-control" name="sectionFlg" id="mySelect">
                  <option value="1">メインループUP</option>
                  <option value="2">メインループDOWN</option>
                </select>
              </div>
            </div>
            <input type="hidden" name="type" value="1">
            <button type="submit" name="button" class="btn btn-primary">送信</button>
          </div>
        </div>
      </form>
    </div>
