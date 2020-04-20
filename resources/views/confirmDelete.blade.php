@include('layouts.head')
  <body>
@include('layouts.nav')
<div class="delete_box p-3">
  <p class="text-primary">削除keyを入力してください。</p>
  @if (session('flash_message'))
      <div class="flash_message text-danger">
          {{ session('flash_message') }}
      </div>
  @endif
  <form class="" action="{{action('HomeController@deletePost')}}" method="post">
    @csrf
    <input type="text" name="delete_key" value="">
    <input type="hidden" name="id" value="{{$id}}">
    <button type="submit" name="button">送信</button>
  </form>
  <button type="button" class="btn btn-outline-secondary"><a href="/">戻る</a></button>
</div>
@include('layouts.footer')
