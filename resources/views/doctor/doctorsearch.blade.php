@extends('layouts.appdoctor')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header  bgcolor text-white">
                    <table width="100%">
                        <tbody  >
                          <tr>
                            <td width="30%" >
                                <h5>{{ __('ค้นหาผู้ป่วย') }}</h5>
                            </td>
                            <td width="40%" align="center">
                               
                            </td>
                            <td width="30%" align="right">
                                <a class="btn btn-link text-white"  href="#link" >
                                    ประวัติการรักษา >
                                </a>
                            </td>
                          </tr>
                        </tbody>
                        </table>
                </div>
                <div class="card-body" >
                    <div class="form-group row" style="text-align:center;  background-color: #b3b3ff;">
                        <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ข้อมูลผู้ป่วย') }}</h5></label>
                    </div>
                    <div style="height : 10px"></div>
                    @foreach ($doctors as $doctor)
                    <form method="POST" action="{{ route('doctorcreate', ['id'=>$doctor->id]) }}">
                        @csrf
                    @endforeach    
                    @foreach ($patients as $patient)
                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                รหัสผู้ป่วย :  <input id="patient_id"  name="patient_id" type="hidden" value="{{ $patient->id }}"  >
                            </div>
                            <div class="col-md-4">
                                {{ $patient->username }}
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                ชื่อ-สกุล : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->tname }}
                                {{ $patient->fname }}
                                {{ $patient->lname }}
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                อายุ : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->age }}
                            </div>
                        </div>

                        <div style="height : 10px"></div>
                        <div style="height : 10px"></div>
                        <div class="form-group row" style="text-align:center; background-color: #b3b3ff; " >
                            <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ค่าของมือ') }}</h5></label>
                        </div>
                        <div style="height : 10px"></div>
                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                แบมือซ้าย : 
                            </div>
                            <div class="col-md-2">
                                {{ $patient->ignore_l }}
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                แบมือขวา : 
                            </div>
                            <div class="col-md-2">
                                {{ $patient->ignore_r }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                กำมือซ้าย : 
                            </div>
                            <div class="col-md-2">
                                {{ $patient->clasp_l }}
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                               กำมือขวา : 
                            </div>
                            <div class="col-md-2">
                                {{ $patient->clasp_r }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                จีบนิ้วซ้าย : 
                            </div>
                            <div class="col-md-2">
                                {{ $patient->pleats_l }}
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                จีบนิ้วขวา : 
                            </div>
                            <div class="col-md-2">
                                {{ $patient->pleats_r }}
                            </div>
                        </div>

                        <div class="form-group row-center" >
                            
                            <div class="col-md-5">
                            </div>
                        </div>

                        <div class="form-group row-center" >
                            <div class="col-md-5">
                            </div>
                        </div>

                        <div class="form-group row" style="text-align:center; background-color: #b3b3ff; "   >
                            <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ต้องการให้ผู้ป่วยได้ค่าของมือ') }}</h5></label>
                        </div>

                        <div class="form-group row-center" >
                            <div class="col-md-5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                แบมือซ้าย : 
                            </div>
                            <div class="col-md-2">
                                <input id="ex_ignore_l"  name="ex_ignore_l" type="text" class="form-control" >
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                แบมือขวา : 
                            </div>
                            <div class="col-md-2">
                                <input id="ex_ignore_r" name="ex_ignore_r"  type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                กำมือซ้าย : 
                            </div>
                            <div class="col-md-2">
                                <input id="ex_clasp_l" name="ex_clasp_l" type="text" class="form-control" >
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                               กำมือขวา : 
                            </div>
                            <div class="col-md-2">
                                <input id="ex_clasp_r" name="ex_clasp_r" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                จีบนิ้วซ้าย : 
                            </div>
                            
                            <div class="col-md-2">
                                <input id="ex_pleats_l"  name="ex_pleats_l" type="text" class="form-control" >
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-2">
                                จีบนิ้วขวา : 
                            </div>
                            <div class="col-md-2">
                                <input id="ex_pleats_r" name="ex_pleats_r" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                รายละเอียดเพิ่มเติม : 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-9">
                                <input id="comment" name="comment" type="text" class="form-control" >
                                ** เพิ่มความเห็นไม่บังคับ **
                            </div>
                        </div>

                        <div class="form-group row-center" >
                            <div class="col-md-5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5 offset-md-5">
                            <button type="submit" class="btn btn-link btnbgcolor text-white">
                                {{ __('ตกลง') }}
                            </button>
                            </div>
                        </div>
                    @endforeach
                    </form>
                </div>
            </div>
           
        </div>
        

    </div>
    <div style="height : 30px"></div>
    <div class="form-group row">
    </div>


    <div class="container">
    <div class="row justify-content-center"> 
    <div class="col-md-10">
        <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);" id="link">
            <div class="card-header bgcolor text-white " style="text-align:center;"><h5>ประวัติการทดสอบ</h5></div>
            <div class="card-body" >
        <table class="table table-striped" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center"></th>
                    <th scope="col">วัน/เดือน/ปี - เวลา</th>
                    <th scope="col" style="text-align:center" colspan="6">ค่าที่ต้องการ</th>
                    <th scope="col">สถานะ</th>
                </tr>
            </thead>
            <tbody style="background-color:#EEEEEE;">
                <input type="hidden" value=" {{ $count = 0 }}">
                @foreach ($exercises as $exercise)
                <tr>
                    <input type="hidden" value="{{ $count++ }}">
                    <th scope="row" style="text-align:center">{{ $count }}</th>
                    <td>{{ $exercise->created_at }}</td>
                    <td>{{ $exercise->ex_ignore_r }}</td>
                    <td>{{ $exercise->ex_clasp_r }}</td>
                    <td>{{ $exercise->ex_pleats_r }}</td>
                    <td>{{ $exercise->ex_ignore_l }}</td>
                    <td>{{ $exercise->ex_clasp_l }}</td>
                    <td>{{ $exercise->ex_pleats_l }}</td>
                    <td> 
                    @if ( ($exercise->do_ignore_r == 0) and
                          ($exercise->do_clasp_r == 0) and
                          ($exercise->do_pleats_r == 0) and
                          ($exercise->do_ignore_l == 0) and
                          ($exercise->do_clasp_l == 0) and
                          ($exercise->do_pleats_l == 0) )
                        ส่งค่าแล้ว
                    @else
                        บำบัด
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
</div>
@include('layouts.bottom')
@endsection
