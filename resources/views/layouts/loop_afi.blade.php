@php
    $randomPcUp = range(0,7);
    shuffle($randomPcUp);
    $randomSpUp = range(0,4);
    shuffle($randomSpUp);
@endphp
<div class="loopAfiWrapper_pc d-flex">
  <!-- PC -->
  <div class="loopAfiBox defultPC">
    @if(isset($mainLoopPcUp[$randomPcUp[0]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[0]]['url'] !!}
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
  <div class="loopAfiBox defultPC hiden1080">
    @if(isset($mainLoopPcUp[$randomPcUp[7]]['url']))
      {!! $mainLoopPcUp[$randomPcUp[7]]['url'] !!}
    @endif
  </div>
  <!-- /PC -->
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[0]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[0]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[1]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[1]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[2]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[2]]['url'] !!}
    @endif
  </div>
  <div class="loopAfiBox_SP">
    @if(isset($mainLoopSpUp[$randomSpUp[3]]['url']))
      {!! $mainLoopSpUp[$randomSpUp[3]]['url'] !!}
    @endif
  </div>

</div>
