@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
    <a class="nav-link " href="#">
        <img src="{{ asset('pic/patient.png') }}" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3); border-color: #FF3399 ; " class="border border-danger rounded-circle bg-white" height="75px" >
    </a>
    </div>
</div>
<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor"  >
                    <table width="100%">
                        <tbody  >
                          <tr>
                            <td width="10%" >
                            </td>
                            <td width="80%" align="center">
                                <h5>{{ __('เข้าสู่ระบบ') }}</h5>
                            </td>
                            <td align="center">
                                <a class="nav-link "  href="{{ route('showdoctorLogin') }}" >
                                    <img src="{{ asset('pic/doctor.png') }}"  height="45px" class="border border-write rounded-circle bg-white"  >
                                </a>
                            </td>
                          </tr>
                        </tbody>
                        </table>
                    
                </div>
                
                <div class="card-body " style="background-color: #F7C9C9 ;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right" >{{ __('รหัสประจำตัวผู้ป่วย') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('จดจำรหัสผ่านไว้') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-link btnbgcolor" style="color: #FFF;" >
                                    {{ __('เข้าสู่ระบบ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: #ED4C67 ;" href="{{ route('password.request') }}">
                                        {{ __('หากลืมรหัสผ่าน ?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    </div>
</div>


<div style="height: 27px;">
</div>
<nav class="shadow-sm bottom" >
    <div class="container">
        <div class="font-weight-bolder text-white font-italic"><center>Copyright © 2019 K.Kiatiikun, W.Washirawit <br/> King Mongkut's University of Technology North Bangkok.</center></div>
    <div>
</nav>

@endsection



