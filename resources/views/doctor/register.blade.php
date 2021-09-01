@extends('layouts.appdoctor')

@section('content')
<script>
  var score = 0;
  var flag = 0;
  var input1 = 0;
  var input2 = 0;
  var input3 = 0;
  var input4 = 0;
  var input5 = 0;
  var input6 = 0;

  Leap.loop({
    frame: function(frame){
      var hand = frame.hands[0];
      if (hand){
        var dot = Leap.vec3.dot(hand.direction, hand.indexFinger.direction);

        console.assert(!isNaN(dot));

        /* out1.innerHTML = dot.toPrecision(4); */
        if(flag==0){     
            document.getElementById("out1r").value = dot.toPrecision(4);
        }
        if(flag==1){     
            document.getElementById("out2r").value = dot.toPrecision(4);
        }
        if(flag==2){ 
            document.getElementById("out3r").value = dot.toPrecision(4);
        }
        if(flag==3){ 
            document.getElementById("out1l").value = dot.toPrecision(4);
        }
        if(flag==4){    
            document.getElementById("out2l").value = dot.toPrecision(4);
        }
        if(flag==5){        
            document.getElementById("out3l").value = dot.toPrecision(4);
        }
        
        if(flag==10){        
            // success
        }
      } 
    }
  });
</script>
<style>
  #out1r{
    font-weight: bold;
  }
  #out2r{
    font-weight: bold;
  }
  #out3r{
    font-weight: bold;
  }
  #out1l{
    font-weight: bold;
  }
  #out2l{
    font-weight: bold;
  }
  #out3l{
    font-weight: bold;
  }
  #uout1r{
    color: white;
  }
  #uout2r{
    color: white;
  }
  #uout3r{
    color: white;
  }
  #uout1l{
    color: white;
  }
  #uout2l{
    color: white;
  }
  #uout3l{
    color: white;
  }
  #dout1r{
    color: white;
  }
  #dout2r{
    color: white;
  }
  #dout3r{
    color: white;
  }
  #dout1l{
    color: white;
  }
  #dout2l{
    color: white;
  }
  #dout3l{
    color: white;
  }
  #al{
    font-weight: bold;
    color: #fd4c5a;
  }
</style>

<div class="container">
    <div class="row justify-content-center ">
        <a class="nav-link " href="#">
            <img src="{{ asset('pic/patient.png') }}" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5); border-color: #FF3399 ; " class="bg-white border border-primary rounded-circle" height="75px" >
        </a>
        </div>
    </div>
    <div style="height: 15px;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor"><h5>{{ __('ลงทะเบียนผู้ป่วย') }}</h5></div>

                <div class="card-body"  >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row" style="background-color: #b3b3ff; ">
                                <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ข้อมูลผู้ป่วย') }}</h5></label>
                        </div>

                        <div class="form-group row" >
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('คำนำหน้า') }}</label>
    
                                <div class="col-md-6">
                                        <select class="form-control" id="tname" name="tname"   required autocomplete="tname" autofocus>
                                                <option value="">{{ __('------ เลือก -------') }}</option>
                                                <option value="{{ __('นาย') }}">{{ __('นาย') }}</option>
                                                <option value="{{ __('นาง') }}">{{ __('นาง') }}</option>
                                                <option value="{{ __('นางสาว') }}">{{ __('นางสาว') }}</option>
                                            </select>
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('อายุ') }}</label>
    
                                <div class="col-md-4">
                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="lname" autofocus>
    
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="col-md-2 col-form-label text-md-right">{{ __('ปี') }}</label>
                                </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        </div>

                        <div class="form-group row" style="background-color: #b3b3ff; ">
                                <label for="" class="col-md col-form-label text-md-center" ><h5>{{ __('ข้อมูลการเข้าใช้ระบบ') }}</h5></label>
                        </div>
                        <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('รหัสประจำตัวผู้ป่วย') }}</label>
    
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required >
    
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่านอีกครั้ง') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                        </div>
    
                        <div class="form-group row" style="background-color: #b3b3ff; ">
                                    <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ข้อมูลการเก็บค่ามือผู้ป่วย') }}</h5></label>
                            </div>

                            <div class="form-group row" >
                                    <div class="col-md col-form-label text-md-center"><img src="{{ asset('pic/out1r.png') }}" width="400px" ></div>
                            </div>
                           
                            
                            <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('แบมือขวา') }}</label>

                            <div class="col-md-4">
                                        <input id="out1r" type="text" class="form-control @error('ignore_r') is-invalid @enderror" name="ignore_r" value="{{ old('ignore_r') }}" required >
        
                                @error('ignore_r')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1.5">
                                    <a  id="uout1r"class="btn btn-link text-white btnbgcolor form-control">{{ __('บันทึก')}}</a>
                                </div>
                            <div class="col-md-1.5">
                                <a id="dout1r" class="btn btn-link form-control" style="color : #30336b;" >{{ __('ล้าง?')}}</a>
                            </div>
                        </div>
                        
                        <div class="form-group row" >
                                <div class="col-md col-form-label text-md-center"><img src="{{ asset('pic/out2r.png') }}" width="400px" ></div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('กำมือขวา') }}</label>
                        
                            <div class="col-md-4">
                                    <input id="out2r" type="text" class="form-control @error('clasp_r') is-invalid @enderror" name="clasp_r" value="{{ old('clasp_r') }}" required >
    
                            @error('clasp_r')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-1.5">
                                <a  id="uout2r"class="btn btn-link text-white btnbgcolor form-control">{{ __('บันทึก')}}</a>
                            </div>
                            <div class="col-md-1.5">
                                <a id="dout2r" class="btn btn-link form-control" style="color : #30336b;" >{{ __('ล้าง?')}}</a>
                            </div>
                    </div>

                    <div class="form-group row" >
                            <div class="col-md col-form-label text-md-center"><img src="{{ asset('pic/out3r.png') }}" width="400px" ></div>
                    </div>
                   
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('จีบนิ้วมือขวา') }}</label>
                        
                        <div class="col-md-4">
                                    <input id="out3r" type="text" class="form-control @error('pleats_r') is-invalid @enderror" name="pleats_r" value="{{ old('pleats_r') }}" required >
    
                            @error('pleats_r')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-1.5">
                                <a  id="uout3r" class="btn btn-link text-white btnbgcolor form-control">{{ __('บันทึก')}}</a>
                            </div>
                            <div class="col-md-1.5">
                                <a id="dout3r" class="btn btn-link form-control" style="color : #30336b;" >{{ __('ล้าง?')}}</a>
                            </div>
                    </div>



                    <div class="form-group row" >
                            <div class="col-md col-form-label text-md-center"><img src="{{ asset('pic/out1l.png') }}" width="400px" ></div>
                    </div>
                   
                
                <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('แบมือซ้าย') }}</label>

                <div class="col-md-4">
                            <input  id="out1l" type="text" class="form-control @error('ignore_l') is-invalid @enderror" name="ignore_l" value="{{ old('ignore_l') }}" required >

                    @error('ignore_l')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-1.5">
                        <a  id="uout1l" class="btn btn-link text-white btnbgcolor form-control">{{ __('บันทึก')}}</a>
                    </div>
                <div class="col-md-1.5">
                    <a id="dout1l" class="btn btn-link form-control" style="color : #30336b;" >{{ __('ล้าง?')}}</a>
                </div>
            </div>
            
            <div class="form-group row" >
                    <div class="col-md col-form-label text-md-center"><img src="{{ asset('pic/out2l.png') }}" width="400px" ></div>
            </div>
           
            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('กำมือซ้าย') }}</label>
            
                <div class="col-md-4">
                        <input id="out2l" type="text" class="form-control @error('clasp_l') is-invalid @enderror" name="clasp_l" value="{{ old('clasp_l') }}" required >

                @error('clasp_l')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="col-md-1.5">
                    <a  id="uout2l" class="btn btn-link text-white btnbgcolor form-control">{{ __('บันทึก')}}</a>
                </div>
                <div class="col-md-1.5">
                    <a id="dout2l" class="btn btn-link form-control" style="color : #30336b;" >{{ __('ล้าง?')}}</a>
                </div>
        </div>

        <div class="form-group row" >
                <div class="col-md col-form-label text-md-center"><img src="{{ asset('pic/out3l.png') }}" width="400px" ></div>
        </div>
       
            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('จีบนิ้วมือซ้าย') }}</label>
            
            <div class="col-md-4">
                        <input id="out3l"  type="text" class="form-control @error('pleats_l') is-invalid @enderror" name="pleats_l" value="{{ old('pleats_l') }}" required >

                @error('pleats_l')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="col-md-1.5">
                    <a id="uout3l"   class="btn btn-link text-white btnbgcolor form-control">{{ __('บันทึก')}}</a>
                </div>
                <div class="col-md-1.5">
                    <a id="dout3l" class="btn btn-link form-control" style="color : #30336b;" >{{ __('ล้าง?')}}</a>
                </div>
        </div>


                <div class="col-md-10 text-md-right">
                    <span id="al" class="w3" style="color : #30336b;" >{{ __('*** หมายเหตุ ') }}</span> 
                    <span class="w3">{{ __(' เปิดใช้งาน Leap motion เพื่อทำการเก็บข้อมูลของมือ ') }}</span> 
                </div>
                        

                        <div class="form-group row">
                        </div>
                        <div class="form-group row">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <button type="submit" class="btn btn-link text-white btnbgcolor">
                                    {{ __('ลงทะเบียน') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div style="height: 10px;">
</div>
@include('layouts.bottom')

<script>
$(document).ready(function () {
    $("a#uout1r").bind('click', function () {
        if(input1==1){
            flag = 10;
        }
        else{
            flag = 1 ;
            $( "#out2r" ).focus();
        }
    });
    $("a#uout2r").bind('click', function () {
        if(input2==1){
            flag= 10;
        }
        else{
            flag = 2 ;
            $( "#out3r" ).focus();
        }
    });
    $("a#uout3r").bind('click', function () {
        if(input3==1){
            flag= 10;
        }
        else{
            flag = 3 ;      
            $( "#out1l" ).focus();
        }
    });
    $("a#uout1l").bind('click', function () {
        if(input4==1){
            flag= 10;
        }
        else{
            flag = 4 ;
            $( "#out2l" ).focus();
        }
    });
    $("a#uout2l").bind('click', function () {
        if(input5==1){
            flag= 10;
        }
        else{
            flag = 5 ;
            $( "#out3l" ).focus();
        }
    });
    $("a#uout3l").bind('click', function () {
        if(input6==1){
            flag = 10;
        }
        else{
            flag = 10 ;
        }
    });
      
    $("a#dout1r").bind('click', function () {
        input1 = 1;
        flag = 0 ;
        $( "#out1r" ).focus();
    });
    $("a#dout2r").bind('click', function () {
        input2 = 1;
        flag = 1 ;
        $( "#out2r" ).focus();
    });
    $("a#dout3r").bind('click', function () {
        input3 = 1;
        flag = 2 ;
        $( "#out3r" ).focus();
    });
    $("a#dout1l").bind('click', function () {
        input4 = 1;
        flag = 3 ;
        $( "#out1l" ).focus();
    });
    $("a#dout2l").bind('click', function () {
        input5 = 1;
        flag = 4 ;
        $( "#out2l" ).focus();
    });
    $("a#dout3l").bind('click', function () {
        input6 = 1;
        flag = 5 ;
        $( "#out3l" ).focus();
    });

    
});
</script>
@endsection
