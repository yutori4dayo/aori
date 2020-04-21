@extends('layouts.head')
<body>
@include('layouts.nav')
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-12">
          <ul class="float-sm-right">
            <li class=""><a href="{{ url('/post') }}">
                <button type="button" name="button" class="btn btn-danger">煽り運転ナンバーを投稿する</button>
            </a></li>
          </ul>
        </div>
        @include('layouts.loop_post')
      </div>
    </div>
    <!-- /latestPostData -->



@include('layouts.footer')
