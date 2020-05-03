<html lang="ja">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164149557-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-164149557-1');
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="危険運転やあおり運転をする車のナンバーを投稿が出来ます。あおり運転には暴行罪に該当することがあります、絶対にやめましょう。">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- twiiter -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@samuraiinu2"/>
    <meta property="og:url" content="https://www.aoriunten.net/"/>
    <meta property="og:title" content="あおり運転ナンバー投稿" />
    <meta property="og:description" content="各都道府県で発生した危険運転を投稿して共有できます。投稿された地域ナンバーやボディタイプ等でランキングも集計しています。" />
    <meta property="og:image" content="{{  asset('img/mainimage.png') }}" />

    <!-- select2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet">
    <script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mains.css') }}">
    <script src="https://kit.fontawesome.com/c2064407e9.js"></script>

    <title>
      @if(isset($regionname))
      {{$regionname}} | あおり運転ナンバー投稿
      @elseif(isset($pretitle))
      {{$pretitle}} | あおり運転ナンバー投稿
      @elseif(isset($ranking))
      {{$ranking}} | あおり運転ナンバー投稿
      @else
      あおり運転ナンバー投稿
      @endif
    </title>
  </head>
