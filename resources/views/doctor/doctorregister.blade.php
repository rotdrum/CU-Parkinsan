@extends('layouts.appadmin')
@section('content')
<style>
  #out1r{
    font-weight: bold;
  }
  #out2r{
    font-weight: bold;
  }
  #out3r{
    font-weight: bold;
  }
  #out1l{
    font-weight: bold;
  }
  #out2l{
    font-weight: bold;
  }
  #out3l{
    font-weight: bold;
  }
  #uout1r{
    font-weight: bold;
    color: white;
  }
  #uout2r{
    font-weight: bold;
    color: white;
  }
  #uout3r{
    font-weight: bold;
    color: white;
  }
  #uout1l{
    font-weight: bold;
    color: white;
  }
  #uout2l{
    font-weight: bold;
    color: white;
  }
  #uout3l{
    font-weight: bold;
    color: white;
  }
  #dout1r{
    font-weight: bold;
    color: white;
  }
  #dout2r{
    font-weight: bold;
    color: white;
  }
  #dout3r{
    font-weight: bold;
    color: white;
  }
  #dout1l{
    font-weight: bold;
    color: white;
  }
  #dout2l{
    font-weight: bold;
    color: white;
  }
  #dout3l{
    font-weight: bold;
    color: white;
  }
  #al{
    font-weight: bold;
    color: #fd4c5a;
  }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5);  ">
                <div class="card-header bg-primary text-white"  ><h5>{{ __('ลงทะเบียนแพทย์') }}</h5></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('dodoctorRegister') }}">
                        @csrf

                        <div class="form-group row bg-info">
                                <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ข้อมูลแพทย์') }}</h5></label>
                        </div>

                        <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('คำนำหน้า') }}</label>
    
                                <div class="col-md-6">
                                        <select class="form-control" id="tname" name="tname"  >
                                                <option value="">{{ __('------ เลือก -------') }}</option>
                                                <option value="{{ __('นาย') }}">{{ __('นาย') }}</option>
                                                <option value="{{ __('นาง') }}">{{ __('นาง') }}</option>
                                                <option value="{{ __('นางสาว') }}">{{ __('นางสาว') }}</option>
                                            </select>
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('อายุ') }}</label>
    
                                <div class="col-md-4">
                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="lname" autofocus>
    
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="col-md-2 col-form-label text-md-right">{{ __('ปี') }}</label>
                                </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        </div>

                        <div class="form-group row bg-info">
                                <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('ข้อมูลการเข้าใช้ระบบ') }}</h5></label>
                        </div>
                        <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('บัญชีผู้ใช้') }}</label>
    
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required >
    
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่านอีกครั้ง') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ลงทะเบียน') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
