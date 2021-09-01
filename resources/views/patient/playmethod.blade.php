@extends('layouts.app')

@section('content')

<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center ">
    <div class="nav-link border border-dark rounded bg-white" style="box-shadow: 0 1px 2px rgba(0,0,0,0.5);"  >
        <h3>㊀ กติกาเกมและวิธีการเล่นเกม</h3>
    </div>
    </div>
</div>
<div style="height: 30px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;"><h5>กติกาเกม</h5></div>
                <div class="card-body"  >
                    <img src="{{ asset('pic/playmethod.png') }}"  width="100%" >
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div style="height: 20px;">
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;"><h5>วิธีการเล่นเกม</h5></div>
                <div class="card-body"  >
                    <img src="{{ asset('pic/play1.png') }}"  width="100%" >
                    <img src="{{ asset('pic/play2.png') }}"  width="100%" >
                    <img src="{{ asset('pic/play3.png') }}"  width="100%" >
                    <img src="{{ asset('pic/play4.png') }}"  width="100%" >
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div style="height: 90px;">
</div>
<nav class="shadow-sm bottom" >
    <div class="container">
        <div class="font-weight-bolder text-white font-italic"><center>Copyright © 2019 K.Kiatiikun, W.Washirawit <br/> King Mongkut's University of Technology North Bangkok.</center></div>
    <div>
</nav>
@endsection
