@extends('layouts.app')

@section('content')
<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center ">
        <div class="nav-link border border-dark rounded bg-white" style="box-shadow: 0 1px 2px rgba(0,0,0,0.5);"  >
        <h3>㊀ Leap Motion VR</h3>
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
                    <a class="btn btn-link text-white "  href="#"><h5>ข้อจำกัดอุปกรณ์ฮาร์ดแวร์และซอฟแวร์</h5></a>
                </div>
                <div class="card-body" >

                                        
                    
                    <div  style=" text-align:center;"  >
                    <a class="nav-link"  href="#">
                        <img  src="{{ asset('pic/fiexfox.png') }}" height="200px" >
                    </a>
                    </div>
                    <div  style=" margin-left: 80px;" >
                        <br/>
                        fiexfox : เวอร์ชั่น 73.0.1 ขึ้นไป<br/>
                    </div>


                    <br/>
                    <div  style=" text-align:center;"  >
                    <a class="nav-link"  href="#">
                        <img  src="{{ asset('pic/comgame-removebg-preview.png') }}" height="200px" >
                    </a>
                    </div>

                    <div  style=" margin-left: 80px;" >
                        <br/>
                        การประมวลผล : INTEL® CORE I7 ขึ้นไป<br/>
                        หน่วยความจำหลัก : ROM 8 GB ขึ้นไป<br/>
                        หน่วยความจำรอง : RAM 8 GB ขึ้นไป<br/>
                        การ์ดจอ : MX1050 ขึ้นไป
                    </div>

                    <br/>
                    <div  style=" text-align:center;"  >
                    <a class="nav-link"  href="#">
                        <img  src="{{ asset('pic/oculus-head-removebg-preview.png') }}" height="200px" >
                    </a>
                    </div>
                    <div  style=" margin-left: 80px;" >
                        <br/>
                        VR : รุ่น Rift หรือ Rift S<br/>
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
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; ">
                    <a class="btn btn-link text-white"  href="#"><h5>วิธีการใช้งาน</h5></a>
                </div>
                <div class="card-body" >
                    <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/fiexfox.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            <a href="https://www.mozilla.org/th/firefox/new/"><img  src="{{ asset('pic/99188.png') }}" height="20px" > 1. ดาวน์โหลด Firefox Browser</a><br/>
                            <a href="https://support.mozilla.org/th/kb/view-virtual-reality-firefox-webvr?&mobile=0"><img  src="{{ asset('pic/99188.png') }}" height="20px" > 2. ตั้งค่าหน้าจอให้ใช้งานร่วมกับ VR ได้</a><br/>
                        </div>
    
                        <br/>
                        <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/oculus-head-removebg-preview.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            <a href="https://www.oculus.com/setup/#rift-s-setup"><img  src="{{ asset('pic/99188.png') }}" height="20px" > 3. ดาวน์โหลด Oculus SDK</a><br/>
                        </div>
    
                        <br/>
                        <div  style=" text-align:center;"  >
                        <a class="nav-link"  href="#">
                            <img  src="{{ asset('pic/motion-leap.png') }}" height="200px" >
                        </a>
                        </div>
                        <div  style=" margin-left: 80px;" >
                            <br/>
                            <a href="https://developer.leapmotion.com/vr-setup"><img  src="{{ asset('pic/99188.png') }}" height="20px" > 4. ดาวน์โหลด Leap Motion VR SDK</a><br/>
                        </div>
    
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
