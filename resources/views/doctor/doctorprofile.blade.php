@extends('layouts.appdoctor')
@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <a class="nav-link " href="#">
            <img src="{{ asset('pic/doctor.png') }}" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5); border-color: #FF3399 ; " class="bg-white border border-primary rounded-circle" height="75px" >
        </a>
        </div>
    </div>
    <div style="height: 15px;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5);">
                <div class="card-header text-white bgcolor"><h5>ข้อมูลส่วนตัว</h5></div>

                <div class="card-body" >
                    <form method="POST" action="">
                        @foreach ($doctors as $doctor)
                            <div class="form-group row">
                                <div class="col-md-3">
                                    บัญชีผู้ใช้ :  
                                </div>
                                <div class="col-md-5">
                                    {{ $doctor->username }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    ชื่อ-สกุล : 
                                </div>
                                <div class="col-md-5">
                                    {{ $doctor->tname }}
                                    {{ $doctor->fname }}
                                    {{ $doctor->lname }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    อายุ : 
                                </div>
                                <div class="col-md-5">
                                    {{ $doctor->age }}
                                </div>
                            </div>
                        
                            @endforeach
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 115px;">
</div>
@include('layouts.bottom')

@endsection
