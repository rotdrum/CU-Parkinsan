@extends('layouts.apptestvr2')

@foreach ($exercises as $exercise)
@php
$id = $exercise->id ;
@endphp

@php
$value = $exercise->ex_pleats_l ;
@endphp

@endforeach
@section('content')
<a-scene >
        <a-text position="-0.5 0.5 -2" rotation="0 0 0" color="#000"  id="wow"  ></a-text>
        <a-text position="-1 1 -2" rotation="0 0 0" color="#000"   id="str" value="Pinch the left hand."></a-text>
        <a-sky color="#ECECEC"></a-sky>
        <!-- Player -->
        <a-entity camera="near: 0.01" look-controls>
          <a-entity leap-hand="hand: left"  id="left"></a-entity>
          <a-entity leap-hand="hand: right"  id="right"></a-entity>
        </a-entity> 
  
        <!-- Terrain -->
        <a-grid></a-grid>
  
        <!-- Lighting -->
        <a-light type="ambient" color="#ccc"></a-light>
        <a-light color="#ddf" distance="100" intensity="0.4" type="point"></a-light>
        <a-light color="#ddf" position="3 10 -10" distance="50" intensity="0.4" type="point"></a-light>
      </a-scene>

<script>


Leap.loop({
frame: function(frame){
  var hand = frame.hands[0];
    if (hand){
      var dot = Leap.vec3.dot(hand.direction, hand.indexFinger.direction);
      if(dot <= vel_exercise){
        document.getElementById("wow").setAttribute("text", "value", "pass!");
        Swal.fire({
            icon: 'success',
            title: 'คุณผ่านแล้ว!',
            showConfirmButton: false,
            html: 'คลิกเพื่อทำแบบทดสอบท่าต่อไป :)<br/><form method="POST" action="{{ route("updatevrmode2") }}" >@csrf<input type="hidden" name="id" value="{{ $id }}"><br/><input type="hidden" name="value_" value="{{ $value }}"><br/><input type="submit" value="Next" class="btn btn-primary"></form>',
        })
      }
    }
}
});

</script>


@endsection