@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card" style="box-shadow: 0 1px 2px rgba(0,0,0,0.2);">
                <div class="card-body" style="height: 360px; width: 1100px; background-image: url('{{ asset('pic/bannernew.jpg') }}');  background-size: 1100px 360px;" >         
                </div>             
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
            <div class="card-header text-white bgcolor" style="text-align:center;"><h5>วิดีโอ</h5></div>
            <div class="card-body"  >
                <div style="text-align:center"><iframe width="260" height="150" src="https://www.youtube.com/embed/gh98r6fZxOE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div style="height: 15px;">
                </div>
                <div style="text-align:left">
                <h5><b>คนสู้โรค : รู้จักกับโรคพาร์กินสัน</b></h5>
                <h6>18 กันยายน 2562</h6>
                </div>
            </div>
        </div>   
        </div>
        
        <div class="col-md-8">
                <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3); ">
                    <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;"><h5>แผนที่</h5></div>
    
                    <div class="card-body" >
                        <div class="row ">
                        <div class="col-md-6 " style="text-align:center;">
                                    <a class="nav-link " href="#" >
                                        <img src="{{ asset('pic/map.jpg') }}" height="165px" class="border border-write rounded"  >
                                    </a>
                        </div>
                        <div class="col-md-6">
                                    <h5><b>ศูนย์ความเป็นเลิศทางการแพทย์โรคพาร์กินสันฯ</b></h5>
                                    <h6>ตึก สธ หรือผู้สูงวัย ชั้น 7 โรงพยาบาลจุฬาลงกรณ์ ถนน พระรามที่ 4 เขตปทุมวัน กรุงเทพฯ 10333</h6>
                                    <h6><b>เบอร์โทรศัพท์ :</b> 02 256 4000 ต่อ 70702-3 / 081 107 9999</h6>
                                    <h6><b>โทรสาร :</b> 02 256 4000 ต่อ 70704</h6>
                                    <h6><b>โทรศัพท์เคลื่อนที่ :</b> 081-107-9999</h6>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>

<div style="height: 30px;">
</div>
<nav class="shadow-sm bottom">
    <div class="container">
        <div class="font-weight-bolder text-white font-italic"><center>Copyright © 2019 K.Kiatiikun, W.Washirawit <br/> King Mongkut's University of Technology North Bangkok.</center></div>
    <div>
</nav>
@endsection
