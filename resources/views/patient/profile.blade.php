@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center ">
        <a class="nav-link " href="#">
            <img src="{{ asset('pic/patient.png') }}" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3); border-color: #FF3399 ; " class="border border-danger rounded-circle bg-white" height="75px" >
        </a>
        </div>
    </div>
    <div style="height: 15px;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;"><h5>ข้อมูลส่วนตัว</h5></div>
                <div class="card-body" >
                    <form method="POST" action="">
                    @foreach ($patients as $patient)
                        <div class="form-group row">
                            <div class="col-md-2">
                                รหัสผู้ป่วย :  <input id="patient_id"  name="patient_id" type="hidden" value="{{ $patient->id }}"  >
                            </div>
                            <div class="col-md-4">
                                {{ $patient->username }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                ชื่อ-สกุล : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->tname }}
                                {{ $patient->fname }}
                                {{ $patient->lname }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                อายุ : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->age }}
                            </div>
                        </div>
                    @endforeach
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    <div class="form-group row">
    </div>
    <div class="form-group row">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;"><h5>ค่าของมือ</h5></div>
                <div class="card-body">
                    <form method="POST" action="">
                    @foreach ($patients as $patient)
                        <div class="form-group row" >
                            <div class="col-md-2">
                                แบมือซ้าย : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->ignore_l }}
                            </div>
                            <div class="col-md-2">
                                แบมือขวา : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->ignore_r }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                กำมือซ้าย : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->clasp_l }}
                            </div>
                            <div class="col-md-2">
                               กำมือขวา : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->clasp_r }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                จีบนิ้วซ้าย : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->pleats_l }}
                            </div>
                            <div class="col-md-2">
                                จีบนิ้วขวา : 
                            </div>
                            <div class="col-md-4">
                                {{ $patient->pleats_r }}
                            </div>
                        </div>

                    @endforeach
                    </form>
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
