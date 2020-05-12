@php
    $randomPcUp = range(1,$count128);
    shuffle($randomPcUp);
    $randomSpUp = range(1,5);
    shuffle($randomSpUp);
@endphp
<div class="loopAfiWrapper_pc d-flex">
  <!-- PC -->
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[8]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[8]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[1]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[1]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[2]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[2]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[3]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[3]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[4]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[4]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[5]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[5]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[6]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[6]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox defultPC sp_hidden">
    @if(isset($mainLoopPcUp[$randomPcUp[9]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[9]]['url'] !!}
    @endif
  </div>

  <!-- /PC -->

  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[1]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[1]]['url'] !!}
    @else
    {!! $mainLoopSpUp[$randomSpUp[1]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[2]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[2]]['url'] !!}
      @else
        {!! $mainLoopSpUp[$randomSpUp[2]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[3]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[3]]['url'] !!}
      @else
        {!! $mainLoopSpUp[$randomSpUp[3]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[4]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[4]]['url'] !!}
      @else
        {!! $mainLoopSpUp[$randomSpUp[4]]['url'] !!}
    @endif
  </div>

</div>
