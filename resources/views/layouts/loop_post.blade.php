<div class="col-12">
  @foreach($Cardata as $item)
  <section class="Section_box">
    <div class="SectionTitleBox d-flex">
      <h2 class="SectionTitle"><b>{{$item->Prefecture_city}}</b></h2>
      <time class="ml-auto">{{$item->created_at}}</time>
    </div>
    <div class="latestPostData">
      <div class="spbox">
        <div class="box ml-2 mb-2 pt-5">
          <ul class="list d-flex">
            @if(strlen($item->Region) > 9)
            <li class="list-item plate Region1 strlenover">
              @if($item->Region === NULL)
              {{ '不明'}}
              @else
              {{ $item->Region}}
              @endif
            </li>
            @elseif(strlen($item->Region) > 6)
            <li class="list-item plate Region1 strlen">
              @if($item->Region === NULL)
              {{ '不明'}}
              @else
              {{ $item->Region}}
              @endif
            </li>
            @else
            <li class="list-item plate Region1">
              @if($item->Region === NULL)
              {{ '不明'}}
              @else
              {{ $item->Region}}
              @endif
            </li>
            @endif
            <li class="list-item plate Classification1">@if($item->Classification === NULL){{ '不明'}}@else{{ $item->Classification}}@endif</li>
            <li class="list-item plate Distinction1">@if($item->Distinction === NULL){{ '不明'}}@else{{ $item->Distinction}}@endif</li>
            <li class="list-item plate Mainnumber1">{{$item->Mainnumber}}</li>
          </ul>
        </div>
        <ul class="list header_list">
          <li class="list-item">場所:@if($item->Prefecture_city === NULL){{ '不明'}}@else{{ $item->Prefecture_city}}@endif</li>
          <li class="list-item">色　:@if($item->Color === NULL){{ '不明'}}@else{{ $item->Color}}@endif</li>
          <li class="list-item">車種:
            @if($item->bodytype === NULL)
            {{ '不明'}}
            @elseif($item->bodytype === 'ステーションワゴン')
            <span class="ChangeSize">{{ 'ステーションワゴン' }}</span>
            @else
            {{ $item->bodytype}}
            @endif</li>
          <li class="list-item">ブランド:
            @if($item->Bland === NULL)
            {{ '不明'}}
            @elseif($item->Bland === 'フィアット・アバルト')
            <span class="ChangeSize">{{ 'フィアット・アバルト' }}</span>
            @else
            {{ $item->Bland}}
            @endif</li>
        </ul>
      </div>
      <div class="pic_text_box">
        <ul class="pic_text_box_list">
          @if($item->car_img === null)
          <li class="Textlist"><img src="{{  asset('img/noimage.png') }}" class="noimage"></li>
          @else
          <li class="Textlist"><a href="{{ action('HomeController@carimage', $item->id) }}"><img src="{{  asset('img/'.$item->car_img) }}" class="image"></a></li>
          @endif
          <li class="list-item text_area">{{ $item->text}}</li>
        </ul>
      </div>
    </div>
  </section>
  @endforeach
</div>
