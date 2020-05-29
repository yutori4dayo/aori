<form class="" action="{{action('ManagerController@check')}}" method="get">
  @csrf
  <div class="loginWrapq d-flex">
    <input type="text" name="email" value="">
    <input type="password" name="password" value="">
    <input type="submit" name="" value="送信">
  </div>
</form>
