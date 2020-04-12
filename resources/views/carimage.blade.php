@include('layouts.head')
  <body>
@include('layouts.nav')
    @if($Carimage)
    <div class="imgbox">
      <div class="blahbox">
        <img src="{{  asset('big/'.$Carimage) }}" class="bigimage">
      </div>
    </div>
    @elseif($Carimage === null)
    <p>No Image</p>
    @endif
@include('layouts.footer')
