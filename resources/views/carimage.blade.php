@include('layouts.head')
  <body>
@include('layouts.nav')
    @if($Carimage)
    <img src="{{  asset('big/'.$Carimage) }}">
    @elseif($Carimage === null)
    <p>No Image</p>
    @endif
@include('layouts.footer')
