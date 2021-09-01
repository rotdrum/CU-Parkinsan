@extends('layouts.appdoctor')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header bgcolor text-white"><h5>รายงานผล</h5></div>

                <div class="card-body" align="center" >
                    <div style="height: 10px;">
                    </div>
                        @foreach ($doctors as $doctor)
                        
                        @php  
                            $idd = $doctor->id;
                        @endphp
                        <form method="POST" action="{{ route('doctorsearchreport', ['id'=>$idd]) }}">
                            @csrf
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('รหัสประจำตัวผู้ป่วย') }}</label>
        
                                    <div class="col-md-5">
                                        <input id="username" type="text" class="form-control" name="username" >
                                    </div>
                                    <div class="col-md-3 ">
                                        <button type="submit" class="btn btn-link text-white btnbgcolor ">
                                            {{ __('ค้นหา') }}
                                        </button>
                                    </div>
                                </div>
           <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ-สกุล') }}</label>
        
                                    <div class="col-md-5">
                                        <input id="username" type="text" class="form-control" name="username" >
                                    </div>
                                    <div class="col-md-3 ">
                                        <button type="submit" class="btn btn-link text-white btnbgcolor ">
                                            {{ __('ค้นหา') }}
                                        </button>
                                    </div>
                                </div>
        
                            </form>
                        @endforeach
                        <div style="height: 10px;">
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="text-align:center"></th>
                                    <th scope="col">รหัสประจำตัวผู้ป่วย (HN.id)</th>
                                    <th scope="col">ผู้ป่วย</th>
                                    <th scope="col">สถานะ</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody style="background-color:#EEEEEE;">
                                <input type="hidden" value=" {{ $count = 0 }}">
                                <input type="hidden" value=" {{ $user_id = 0 }}">
                                @php 
                                    $dataf = "" ;
                                @endphp
                                @foreach ($exercises as $exercise)
                                    @if ($exercise->fname == $dataf)
                                    
                                    @else 
                                        <tr>
                                            <input type="hidden" value="{{ $count++ }}">
                                            <th scope="row" style="text-align:center">{{ $count }}</th>
                                            <td>{{ $exercise->username }}</td>
                                            <td>{{ $exercise->tname }} {{ $exercise->fname }} {{ $exercise->lname }}</td>
                                            <td> 
                                            @if ( ($exercise->do_ignore_r == 0) and
                                                ($exercise->do_clasp_r == 0) and
                                                ($exercise->do_pleats_r == 0) and
                                                ($exercise->do_ignore_l == 0) and
                                                ($exercise->do_clasp_l == 0) and
                                                ($exercise->do_pleats_l == 0) )
                                                กำลังบำบัด
                                            @else
                                                บำบัดแล้ว
                                            @endif
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('doctorsearchreport', ['id'=>$idd]) }}">
                                                    @csrf
                                                        <input id="username" type="hidden" class="form-control" name="username" value="{{ $exercise->username }}">
                                                                <button type="submit" class="btn btn-link text-white btnbgcolor ">
                                                                    {{ __('ค้นหา') }}
                                                                </button>
                                
                                                    </form>
                                            </td>
                                        </tr>
                                        @php 
                                            $dataf = $exercise->fname ;
                                        @endphp
                                    @endif
                                
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.bottom')
@endsection
