@extends('layouts.app')

@section('content')

<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center ">
    <div class="nav-link border border-dark rounded bg-white" style="box-shadow: 0 1px 2px rgba(0,0,0,0.5);"  >
        <h3>㊀ คำสั่งแพทย์</h3>
    </div>
    </div>
</div>
<div style="height: 30px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;"><h5>ความต้องการในการฟื้นฟู</h5></div>
                <div class="card-body" >
                    <table class="table table-striped">
                        <thead class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center" >ลำดับ</th>
                                <th scope="col" >วัน/เดือน/ปี - เวลา</th>
                                
                                <th scope="col" style="text-align:center">แบมือซ้าย</th>
                                <th scope="col" style="text-align:center">กำมือซ้าย</th>
                                <th scope="col" style="text-align:center">จีบนิ้วซ้าย</th>
                                <th scope="col" style="text-align:center">แบมือขวา</th>
                                <th scope="col" style="text-align:center">กำมือขวา</th>
                                <th scope="col" style="text-align:center">จีบนิ้วขวา</th>
                                <th scope="col" style="text-align:center" >สถานะ</th>
                                <th scope="col" style="text-align:center" >เลือกโหมดฟื้นฟู</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            <input type="hidden" value=" {{ $count = 0 }}">
                            @foreach ($exercises as $exercise)
                            <input type="hidden" name="id" value="{{ $exercise->id }}" >
                            <tr>
                                <input type="hidden" value="{{ $count++ }}">
                                <th scope="row" style="text-align:center">{{ $count }}</th>
                                <td>
                                    {{ $exercise->created_at }}
                                </td>
                                <td style="text-align:center">
                                @if ($exercise->do_ignore_l == 0)
                                    @if ( (Auth::user()->ignore_l ) >= ( $exercise->ex_ignore_l ) )
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @else
                                    <img src='{{ asset('pic/up.png') }}' height='25px'>
                                    @endif
                                @else
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                @endif
                                </td>
                                <td style="text-align:center">
                                @if ($exercise->do_clasp_l == 0)
                                    @if ( (Auth::user()->clasp_l ) <= ( $exercise->ex_clasp_l ) )
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @else
                                    <img src='{{ asset('pic/up.png') }}' height='25px'>
                                    @endif
                                @else
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                @endif
                                </td>
                                <td style="text-align:center">
                                @if ($exercise->do_pleats_l == 0)
                                    @if ( (Auth::user()->pleats_l ) <= ( $exercise->ex_pleats_l ) )
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @else
                                    <img src='{{ asset('pic/up.png') }}' height='25px'>
                                    @endif
                                @else
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                @endif
                                </td>
                                <td style="text-align:center">
                                    @if ($exercise->do_ignore_r == 0)
                                        @if ( (Auth::user()->ignore_r) >= ( $exercise->ex_ignore_r ) )
                                            <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                        @else
                                            <img src='{{ asset('pic/up.png') }}' height='25px'>
                                        @endif
                                    @else
                                        <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @endif
                                </td>
                                <td style="text-align:center">
                                @if ($exercise->do_clasp_r == 0)
                                    @if ( (Auth::user()->clasp_r ) <= ( $exercise->ex_clasp_r ) )
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @else
                                    <img src='{{ asset('pic/up.png') }}' height='25px'>
                                    @endif
                                @else
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                @endif
                                </td>
                                <td style="text-align:center">
                                @if ($exercise->do_pleats_r == 0)
                                    @if ( (Auth::user()->pleats_r ) <= ( $exercise->ex_pleats_r ) )
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @else
                                    <img src='{{ asset('pic/up.png') }}' height='25px'>
                                    @endif
                                @else
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                @endif
                                </td>
                                <td style="text-align:center"> 
                                @if ( ($exercise->do_ignore_r == 0) and
                                      ($exercise->do_clasp_r == 0) and
                                      ($exercise->do_pleats_r == 0) and
                                      ($exercise->do_ignore_l == 0) and
                                      ($exercise->do_clasp_l == 0) and
                                      ($exercise->do_pleats_l == 0) )
                                    รอการบำบัด
                                    @elseif( ($exercise->do_ignore_r >= $exercise->ex_ignore_r ) and
                                    ($exercise->do_clasp_r <= $exercise->ex_clasp_r ) and
                                    ($exercise->ex_pleats_r <= $exercise->ex_pleats_r ) and
                                    ($exercise->do_ignore_l >= $exercise->ex_ignore_l ) and
                                    ($exercise->do_clasp_l <= $exercise->ex_clasp_l ) and
                                    ($exercise->do_pleats_l <= $exercise->ex_pleats_l ) )
                                    เสร็จสิ้น
                                @else
                                    กำลังบำบัด
                                @endif
                                </td>
                                <td style="text-align:center">
                                    
                                    @if ( ($exercise->do_ignore_r == 0) and
                                        ($exercise->do_clasp_r == 0) and
                                        ($exercise->do_pleats_r == 0) and
                                        ($exercise->do_ignore_l == 0) and
                                        ($exercise->do_clasp_l == 0) and
                                        ($exercise->do_pleats_l == 0) )
                                        <a class="btn btn-link text-white btnbgcolor" style="background-color:#d966ff;"  href="{{ route('showtestbox1', ['id'=>$exercise->id]) }}">{{ __('box') }}</a>
                                        <a class="btn btn-link text-white btnbgcolor" style="background-color:#6699FF;"  href="{{ route('showtestvr1', ['id'=>$exercise->id]) }}">{{ __('vr') }}</a>
                                    @elseif( ($exercise->do_ignore_r >= $exercise->ex_ignore_r ) and
                                        ($exercise->do_clasp_r <= $exercise->ex_clasp_r ) and
                                        ($exercise->ex_pleats_r <= $exercise->ex_pleats_r ) and
                                        ($exercise->do_ignore_l >= $exercise->ex_ignore_l ) and
                                        ($exercise->do_clasp_l <= $exercise->ex_clasp_l ) and
                                        ($exercise->do_pleats_l <= $exercise->ex_pleats_l ) )
            
                                    @else
                                    <a class="btn btn-link text-white btnbgcolor" style="background-color:#d966ff;"  href="{{ route('showtestbox1', ['id'=>$exercise->id]) }}">{{ __('box') }}</a>
                                    <a class="btn btn-link text-white btnbgcolor" style="background-color:#6699FF;"  href="{{ route('showtestvr1', ['id'=>$exercise->id]) }}">{{ __('vr') }}</a>
                                    @endif
                                            
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
