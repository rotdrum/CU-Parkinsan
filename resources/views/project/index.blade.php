@extends('layouts.app')

@section('content')
<!--header-->
<!--breadcrumb-->
<!-- 
<h3>Project list&nbsp; <a href={{route("project.create")}} class="btn btn-success">Create New</a></h3>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Projects</li>
    </ol>
</nav>
-->
<div class="form-group row">
</div>
<div class="form-group row">
    <div class="col-md-7">
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
            <div class="card-header text-white bgcolor" style="text-align:center; "><h5>ศูนย์โรคพาร์กินสัน และกลุ่มโรคความเคลื่อนไหวผิดปกติ</h5></div>
            <div class="card-body" style="text-align:center;" >  
                <iframe width="512" height="300" src="https://www.youtube.com/embed/9ywIndYtuUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>    
        </div>
        <div class="form-group row">
        </div>
        <div class="form-group row">
        </div>
        <div class="form-group row">
        </div>
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
            <div class="card-header text-white bgcolor" style="text-align:center; "><h5>วิธีใช้และการติดตั้ง</h5></div>
            <div class="card-body" style="text-align:center;" >  
                <div class="row ">
                <div class="col-md-6">
                    <img  src="{{ asset('pic/desktopmode.png') }}" height="60px" >
                    <a class="btn btn-link" style="color:#FF3399;"  href="{{ route('boxrecommend') }}"><h5>Leap Motion Box ›</h5></a>
                </div>
                <div class="col-md-6">
                    <img  src="{{ asset('pic/vrmode.png') }}" height="60px" >
                    <a class="btn btn-link" style="color:#FF3399;"   href="{{ route('vrrecommend') }}"><h5>Leap Motion VR ›</h5></a>
                </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="col-md-5">
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
            <div class="card-header text-white bgcolor" style="text-align:center; "><h4>เกม</h4></div>
            <div class="card-body" style="text-align:center;" >  
                <table class="table table-striped">
                    <thead  class="thead thead-dark">
                        <tr>
                            <th scope="col" style="text-align:center"></th>
                            <th scope="col" style="text-align:center">ทั้งหมด</th>
                            <th scope="col" style="text-align:center">ชนะ</th>
                            <th scope="col" style="text-align:center">ยังไม่ผ่าน</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:#EEEEEE;">
                        <tr>
                            <th scope="row" style="text-align:center">มือซ้าย</th>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">
                                @php $countl = 0 ;@endphp
                                @foreach ($gamel_s as $gamel_)
                                    @php $countl = $countl + 1 ;@endphp
                                @endforeach

                                
                                {{ $countl }}
                            </td>
                            <td style="text-align:center">{{ 15 - $countl }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">มือขวา</th>
                            <td style="text-align:center">15</td>
                            <td style="text-align:center">
                                @php $countr = 0 ;@endphp
                                @foreach ($gamer_s as $gamer_)
                                    @php $countr = $countr + 1 ;@endphp
                                @endforeach
                                
                                {{ $countr }}
                            </td>
                            <td style="text-align:center">{{ 15 - $countr }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:right;">
                                <a class="btn btn-link btnbgcolor" href="{{ route('gamemode') }}" style="color :#FFF; ">ดูเพิ่มเติม ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>
        
        <div style="text-align:center"> </div>
        
        <div class="form-group row">
        </div>
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
            <div class="card-header text-white bgcolor" style="text-align:center; "><h4>คำสั่งแพทย์</h4></div>
            <div class="card-body" style="text-align:center;" >  
                <table class="table table-striped">
                    <thead class="thead thead-dark">
                        <tr>
                            <th scope="col" style="text-align:center">ลำดับ</th>
                            <th scope="col">วัน/เดือน/ปี - เวลา</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody  style="background-color:#EEEEEE;">
                        <input type="hidden" value=" {{ $count = 0 }}">
                        @foreach ($exercises as $exercise)
                        @if($count>=2)

                        @else
                        <tr>
                            <input type="hidden" value="{{ $count++ }}">
                            <th scope="row" style="text-align:center">{{ $count }}</th>
                            <td>{{ $exercise->created_at }}</td>
                            <td> 
                            @if ( ($exercise->do_ignore_r == 0) and
                                  ($exercise->do_clasp_r == 0) and
                                  ($exercise->do_pleats_r == 0) and
                                  ($exercise->do_ignore_l == 0) and
                                  ($exercise->do_clasp_l == 0) and
                                  ($exercise->do_pleats_l == 0) )
                                รอการบำบัด
                            @else
                                บำบัดแล้ว
                            @endif
                            </td>
                            <td>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        <tr>
                            <td colspan="4" style="text-align:right;">
                                <a class="btn btn-link btnbgcolor" href="{{ route('testmode') }}" style="color :#FFF; ">ดูเพิ่มเติม ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
            <div class="card-header text-white bgcolor" style="text-align:center; "><h5>วิดีโอ</h5></div>
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
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3); ">
                    <div class="card-header text-white bgcolor" style="text-align:center; "><h5>แผนที่</h5></div>
    
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
</div>

<div style="height: 20px;">
</div>
<nav class="shadow-sm bottom" >
    <div class="container">
        <div class="font-weight-bolder text-white font-italic"><center>Copyright © 2019 K.Kiatiikun, W.Washirawit <br/> King Mongkut's University of Technology North Bangkok.</center></div>
    <div>
</nav>
@endsection
@section('custom-js')
<script>
    $(document).ready(function(){
        //binding
        $("button[role=delete]").click(function(e){
            let confirmDelete = confirm("Are you sure ?");
            if(!confirmDelete) return false;
            $parent = $(this).parents('tr');
            $.ajax({
                url: $(this).data('url'),
                type: "DELETE",
                method: "DELETE",
                success: function(data){
                    $parent.remove();
                    console.log("removed");
                },
                error: function(data){
                    alert("Something wrong while deleting!!");
                }
            })
        });
    });
</script>
@endsection
