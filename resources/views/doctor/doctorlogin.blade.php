@extends('layouts.app')

@section('content')
<div style="height: 50px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 3px 5px rgba(0,0,0,0.5);">
                <div class="card-header text-white bgcolor" style="text-align: center;">  
                   <a class="nav-link " href="{{ route('showdoctorLogin') }}">
                        <img class="border border-dark bg-white rounded-circle "   src="{{ asset('pic/doctor.png') }}" height="80px" >
                        <img src="{{ asset('pic/co.png') }}" height="80px" >
                    </a>
                </div>
                <div class="card-body" style="background-color: #b3b3ff" >
                    <form method="POST" action="{{ route('dodoctorLogin') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('บัญชีผู้ใช้') }}</label>

                            <div class="col-md-6">
                                <input id="username"  type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <button type="submit" class="btn btn-link btnbgcolor text-white">
                                    {{ __('เข้าสู่ระบบ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}" style="color: #30336b ;">
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
<div style="height: 50px;">
</div>
@include('layouts.bottom')

@endsection
