@extends('layouts.appvr')
@foreach ($games as $game)
@php
$id = $game->id ;
@endphp

@php
$vel_l = $game->lowvalue ;
@endphp

@php
$vel_h = $game->highvalue ;
@endphp
@endforeach
@section('content')
<a-scene>
  <a-text position="1 0.5 -2" rotation="0 0 0" color="#000"   id="count"></a-text>
      <a-text position="0 0.5 -2" rotation="0 0 0" color="#000"  id="wow"  ></a-text>
      <a-text position="-1 1 -2" rotation="0 0 0" color="#000"   id="h"></a-text>
      <a-text position="1 1 -2" rotation="0 0 0" color="#000"   id="score"></a-text>
      <a-text position="0 1 -2" rotation="0 0 0" color="#000"   id="t"></a-text>
      <a-box position="-1 0.5 -3" rotation="0 45 0" color="#7B68EE" id="box1"></a-box>
      <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" id="sphere1"></a-sphere>
      <a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" id="cylinder1" color="#FFC65D"></a-cylinder>
      <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4"></a-plane>
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
       document.getElementById("score").setAttribute("text", "value", "score :"+score);
      var timeleft = 5;
      var flag = 0;
      var count = 0;

      
      var downloadTimer = setInterval(function(){
        
        
        if(flag==0){
         /* swal({
                title : "เริ่มใช้มือ" ,
                text : ".. นับถอยหลัง .." + timeleft ,
                buttons: false,
            });

            */
            timeleft -= 1;
          document.getElementById("t").setAttribute("text", "value", "wait :"+timeleft);
          document.getElementById("h").setAttribute("text", "value", "heart :"+heart);
          if(timeleft==0){
            timeleft = timer ;
            flag = 1; 
          }
        }
        if(flag==1){
          if(count>=10){
            if(score >= 7){
              document.getElementById("wow").setAttribute("text", "value", "winner!");
              Swal.fire({   
                icon: 'success',
                title : "ชนะ!" ,
                showConfirmButton: false,
                html : "คะแนน "+ score +'<form method="POST" action="{{ route("updategameboxmode1", $id) }}" >@csrf<br/><input type="hidden" name="vel_l" value="{{ $vel_l }}"><br/><input type="hidden" name="vel_h" value="{{ $vel_h }}"><br/><input type="submit" value="ต่อไป" class="btn btn-primary"></form>', 
            }); 
              }
              else{
                document.getElementById("wow").setAttribute("text", "value", "lose!");
                Swal.fire({   
                icon: 'error',
                title : "แพ้!"  ,
                showConfirmButton: false,
                html : "คะแนน "+ score +" /10 <br/><br/>" + "<a href='{{ route('gamemode') }}' class='btn btn-link text-white' style='background-color: #FF3399 ;'  ><h5>ตกลง</h5></a>", 
            }); 
              }
            flag = 10;
          }
          timeleft -= 1;
          document.getElementById("t").setAttribute("text", "value", "timer :"+timeleft);
          if(timeleft==0){
            if(heart == 3) {
              var div = document.getElementById("box1");
              div.parentNode.removeChild(div);
            }
            if(heart == 2) {
              var div = document.getElementById("sphere1");
              div.parentNode.removeChild(div);
            }
            if(heart == 1) {
              var div = document.getElementById("cylinder1");
              div.parentNode.removeChild(div);
            }
            heart = heart - 1;
            count = count + 1;
            document.getElementById("h").setAttribute("text", "value", "heart : "+heart);
            if(heart == 0 || count >= 10){
              if(score >= 7){
                document.getElementById("wow").setAttribute("text", "value", "winner!");
                Swal.fire({   
                icon: 'success',
                title : "ชนะ!" ,
                showConfirmButton: false,
                html : "คะแนน "+ score +'<form method="POST" action="{{ route("updategameboxmode1", $id) }}" >@csrf<br/><input type="hidden" name="vel_l" value="{{ $vel_l }}"><br/><input type="hidden" name="vel_h" value="{{ $vel_h }}"><br/><input type="submit" value="ต่อไป" class="btn btn-primary"></form>', 
            }); 
              }
              else{
                document.getElementById("wow").setAttribute("text", "value", "lose!");
                Swal.fire({   
                icon: 'error',
                title : "แพ้!"  ,
                showConfirmButton: false,
                html : "คะแนน "+ score +" /10 <br/><br/>" + "<a href='{{ route('gamemode') }}' class='btn btn-link text-white' style='background-color: #FF3399 ;'  ><h5>ตกลง</h5></a>", 
              }); 
              }
              flag = 10;
            }
            else{
              timeleft = timer ;
              flag = 1; 
            }
          }
        }
        if(flag==10){ //status end

        }

      }, 1000);


      var flaghand = 0 ;
        Leap.loop({

          frame: function(frame){
            var hand = frame.hands[0];
                        
            if(flag==1){
              if (hand){
              var dot = Leap.vec3.dot(hand.direction, hand.indexFinger.direction);
              console.assert(!isNaN(dot));
                if(flaghand == 0){
                  if(dot < vel_low){
                    document.getElementById("wow").setAttribute("text", "value", "wow!");
                    flaghand = 1 ;
                  }
                }
                
                if(flaghand == 1){
                  if(dot > vel_high){
                    score = score + 1;
                    count = count + 1;
                    document.getElementById("wow").setAttribute("text", "value", "");
                    document.getElementById("score").setAttribute("text", "value", "score :"+score);
                    flag = 1;
                    timeleft = timer;
                    flaghand = 0 ;
                  }
                }
                
              }

                
            }
            
          }

        });
    </script>

@endsection