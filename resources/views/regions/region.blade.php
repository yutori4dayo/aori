@extends('layouts.head')
<body>
@include('layouts.nav')

  {{--  serch cardata section  --}}

    @include('layouts.serch_cardata',['title'=>$place])

  {{--  /serch cardata section  --}}


  {{--  place name section  --}}

    @include('layouts.place_title',['title'=>$place.'ナンバー'])

  {{--  /place name section  --}}


  {{--  cardata main section  --}}

    @include('layouts.cardata_main')

  {{--  /cardata main section  --}}




@include('layouts.footer')
