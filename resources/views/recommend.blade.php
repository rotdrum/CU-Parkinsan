@extends('layouts.app')

@section('content')
<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center ">
    <div class="nav-link border border-dark rounded bg-white" style="box-shadow: 0 1px 2px rgba(0,0,0,0.5);"  >
        <h3>㊀ เลือกโหมดที่ต้องการ</h3>
    </div>
    </div>
</div>
<div style="height: 30px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center;">  
                    <a class="btn btn-link text-white "  href="{{ route('boxrecommend') }}"><h5>Leap Motion Box ›</h5></a>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <a class="nav-link " href="{{ route('boxrecommend') }}">
                        <img  src="{{ asset('pic/desktopmode.png') }}" height="200px" >
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; ">
                    <a class="btn btn-link text-white" href="{{ route('vrrecommend') }}"><h5>Leap Motion VR ›</h5></a>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <a class="nav-link "  href="{{ route('vrrecommend') }}">
                        <img  src="{{ asset('pic/vrmode.png') }}" height="200px" >
                    </a>
                </div>
            </div>
        
        </div>

    </div>
</div>
</div>
<div style="height: 20px;">
</div>
<nav class="shadow-sm bottom" >
    <div class="container">
        <div class="font-weight-bolder text-white font-italic"><center>Copyright © 2019 K.Kiatiikun, W.Washirawit <br/> King Mongkut's University of Technology North Bangkok.</center></div>
    <div>
</nav>


@endsection
