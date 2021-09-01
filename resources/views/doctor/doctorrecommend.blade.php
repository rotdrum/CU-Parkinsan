@extends('layouts.appdoctor')

@section('content')
@foreach ($doctors as $doctor)
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
            <div class="card" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5);">
                <div class="card-header text-white bgcolor" style="text-align:center; ">  
                    <a class="btn btn-link text-white "  href="{{ route('boxshowdoctorrecommend', ['id'=>$doctor->id]) }}"><h5>Leap Motion Box ›</h5></a>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <a class="nav-link "  href="{{ route('boxshowdoctorrecommend', ['id'=>$doctor->id]) }}">
                        <img  src="{{ asset('pic/desktopmode.png') }}" height="200px" >
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5);">
                <div class="card-header text-white bgcolor" style="text-align:center; ">
                    <a class="btn btn-link text-white"   href="{{ route('vrshowdoctorrecommend', ['id'=>$doctor->id]) }}"><h5>Leap Motion VR ›</h5></a>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <a class="nav-link " href="{{ route('vrshowdoctorrecommend', ['id'=>$doctor->id]) }}">
                        <img  src="{{ asset('pic/vrmode.png') }}" height="200px" >
                    </a>
                </div>
            </div>
        
        </div>

    </div>
</div>
</div>
<div style="height: 10px;">
</div>
@endforeach
@include('layouts.bottom')


@endsection
