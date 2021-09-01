<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TODO LIST') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TODO LIST') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

    <!-- link fontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('css/app.css') }}"></script>
    
    <!--  Scripts Leap motion -->
    <script src="{{ asset('leapmotion/leap-0.6.4.js') }}"></script>
    
    @if (Route::is('showdoctorLogin'))
    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: 'Sarabun', sans-serif;
            background-image: url("{{ asset('pic/bgdoctor.jpg') }}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .btnbgcolor{
            background-image: linear-gradient(120deg, #30336b, #30336b);
        }
        
        .bgcolor{
            background-image: linear-gradient(120deg, #686de0, #30336b);
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            box-shadow: 0 3px 5px rgba(0,0,0,0.3);
        }
        .bottom{
            background: #30336b;
        }
        
    </style>
    @else 
    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: 'Sarabun', sans-serif;
            background-image: url("{{ asset('pic/bg2.jpg') }}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        
        .bgcolor{
            background-image: linear-gradient(120deg, #ED4C67, #B53471);
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            box-shadow: 0 3px 5px rgba(0,0,0,0.3);
        }
        .btnbgcolor{
            background-image: linear-gradient(120deg, #ED4C67, #ED4C67);
        }
        .bottom{
            background: #ED4C67;
        }
    </style>
    @endif


    <style>
       
        .nav-edit {
            margin: 0;
            padding: 0;
            height: 100px;
            background-color: #fff;
            border-bottom: 7px solid #1cc3b2;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .nav-edit-2 {
            margin: 0;
            padding: 0;
            height: 50px;
            background-color: #1cc3b2;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
        ul.nav-ul {
            display: flex;
            flex-direction: row;
            margin-top: 15px;
        }
        li.nav-li {
            margin: 0 10px;
            list-style: none;
        }
        a.nav-a {
            color: #333;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: .4s;
        }
        a.nav-a:hover {
            color: #ababab;
        }
        a.box {
            padding: 7px 15px;
            border: 2px solid #333;
            border-radius: 5px;
            transition: .4s;
            text-decoration: none;
        }
        a.box:hover {
            color: white;
            background-color: #333;
        }

        a.nav-a-2 {
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
            color: white;
            text-decoration: none;
            transition: .4s;
            padding-bottom: .5em;
            border-bottom: 0 solid transparent;
        }
        a.nav-a-2:hover {
            color: #333;
            border-bottom: 0;
            padding-bottom: 0;
            border-bottom: 2px solid #333;
        }
        li.nav-li-2 {
            margin: 0 50px;
            list-style: none;
        }
        a.btn-edit {
            padding-top: 2px;
            padding-left: 2px;
            padding-right: 2px;
            padding-bottom: 2px;
            color: #fff;
            background-color: #2ecc71;
        }
        a.btn-delete {
            padding-top: 2px;
            padding-left: 2px;
            padding-right: 2px;
            padding-bottom: 2px;
            color: #fff;
            background-color: #fd4c5a;
        }

    </style>
@if (Route::is('showdoctorLogin'))
<style>
    input[type=username]:focus , input[type=text]:focus, input[type=password]:focus {
            border-color:  #30336b;
            box-shadow: 0 1px 1px #30336b inset, 0 0 8px #30336b;
            outline: 0 none;}
</style>
@else 
<style>
    input[type=username]:focus , input[type=text]:focus, input[type=password]:focus {
            border-color:  #ED4C67;
            box-shadow: 0 1px 1px #ED4C67 inset, 0 0 8px #ED4C67;
            outline: 0 none;}
</style>
@endif

<body>
    <div id="app">
        @if (Route::is('showdoctorLogin'))
        <nav class="navbar navbar-expand-md navbar-light shadow-sm "style="  background: #30336b;" >
        @else 
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="  background: #ED4C67;">
        @endif
            <div class="container">
                <table >
                    <tbody >
                      <tr>
                        <td rowspan="2" >
                            <a class="navbar-brand" href="{{ url('/') }}" >
                                <img src="{{ asset('pic/bannerpic.png') }}"  height="90px" >
                            </a>
                        </td>
                        <td class="d-flex-colum align-items-end text-white " rowspan="2">
                            <div class="font-weight-bolder" ><h5>ระบบบำบัดฟื้นฟูผู้ป่วยโรคพาร์กินสัน</h5> </div>
                            @if (Route::is('showdoctorLogin'))
                            <div class="font-weight-bolder">แพทย์ผู้ดูแลรักษากลุ่มโรคความเคลื่อนไหวผิดปกติ</div>
                            @else 
                            <div class="font-weight-bolder">ผู้ป่วยกลุ่มโรคความเคลื่อนไหวผิดปกติ</div>
                            @endif
                        </td>
                      </tr>
                      <tr>
                      </tr>
                    </tbody>
                    </table>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if ( empty(Auth::user()->id) )
                            @if (Route::is('showdoctorLogin'))
                            <li class="nav-item">
                                <a class="btn btn-link text-white" style="padding: 20px 3px; " href="{{ route('index') }}">{{ __('หน้าแรก') }}</a>
                            </li>
                            
                            <li class="nav-item">
                            <a class="btn btn-link "  href="{{ route('login') }}">
                                <img src="{{ asset('pic/patient.png') }}" height="45px" class="border border-write rounded-circle"  >
                            </a>
                            </li>
                            @else 
                            <li class="nav-item">
                                <a class="btn btn-link text-white" href="{{ route('index') }}">{{ __('หน้าแรก') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-white" href="{{ route('recommend') }}">{{ __('วิธีใช้และการตั้งค่า') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-white border border-white rounded" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="btn btn-link text-white " href="{{ route('profile') }}">{{ __('เลขประจำตัวผู้ป่วย : ') }}{{ Auth::user()->username }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-white" href="{{ route('project.index') }}">{{ __('หน้าแรก') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-white" href="{{ route('gamemode') }}">{{ __('เกม') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-white" href="{{ route('testmode') }}">{{ __('แบบฝึกหัด') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-white" href="{{ route('recommend') }}">{{ __('วิธีใช้และการตั้งค่า') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link bg-gradient-dark text-white " href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >{{ __('ออกจากระบบ') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
    <!--required script-->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

    </script>
    @yield('custom-js')
</body>

</html>
