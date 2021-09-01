@extends('layouts.appdoctor')

@section('content')
<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center ">
    <div class="nav-link border border-dark rounded bg-white" style="box-shadow: 0 1px 2px rgba(0,0,0,0.5);"  >
        <h3>㊀ Leap Motion Box</h3>
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
                    <a class="btn btn-link text-white "  href="#"><h5><h5>ข้อจำกัดอุปกรณ์ฮาร์ดแวร์และซอฟแวร์</h5></h5></a>
                </div>
                <div class="card-body"  >

                    <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/chrome-removebg-preview.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            fiexfox : เวอร์ชั่น 73.0.1 ขึ้นไป<br/>
                        </div>
    
                        <br/>
                        <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/motion-leap.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            Leap Motion<br/>
                        </div>

                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5);">
                <div class="card-header text-white bgcolor" style="text-align:center; ">
                    <a class="btn btn-link text-white"  href="#"><h5>วิธีการใช้งาน</h5></a>
                </div>
                <div class="card-body" >

                    <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/chrome-removebg-preview.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            <a href="https://www.google.com/chrome/?brand=CHBD&gclid=EAIaIQobChMIlMfx87Co6AIV1BuPCh1ZgATFEAAYASABEgIw6vD_BwE&gclsrc=aw.ds"><img  src="{{ asset('pic/99188.png') }}" height="20px" > 1. ดาวน์โหลด Google Chrome Browser</a><br/>
                        </div>
    
                        <br/>
                        <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/motion-leap.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            <a href="https://developer.leapmotion.com/desktop-setup"><img  src="{{ asset('pic/99188.png') }}" height="20px" > 2. ดาวน์โหลด Leap Motion Desktop SDK</a><br/>
                        </div>
    
                </div>


                </div>
            </div>
        
        </div>

    </div>
</div>
</div>
<div style="height: 10px;">
</div>
@include('layouts.bottom')


@endsection
