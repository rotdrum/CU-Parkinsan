<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no,maximum-scale=1">
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
    <script src="{{ asset('js/leapRL.js') }}"></script>
    <script src="{{ asset('js/leap-plugins-0.1.6.js') }}"></script>
    <script src="{{ asset('js/three.js') }}"></script>

    <!--  Scripts Leap a-frame -->
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="{{ asset('aframe/aframe-leap-hands.umd.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!--  Scripts Sweet Alert -->
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @foreach ($games as $game)
        @php
        $id = $game->id ;
        @endphp
        
        @php
        $vel_l = $game->lowvalue ;
        @endphp
        
        @php
        $vel_h = $game->highvalue ;
        @endphp
    @endforeach

    @foreach ($gamesettings as $gamesetting)
    <script>
        var typehand = {{ $gamesetting->type }};
    </script>
    @endforeach


    @foreach ($gamesettings as $gamesetting)
    <script>
        var typehand = {{ $gamesetting->type }};
        var timer = {{ $gamesetting->timer }};
        var handstr = "";

        if((typehand == 1)||(typehand == 3)||(typehand == 5)){
            handstr = 'left';
        }
        else{
            handstr = 'right';
        }

        if(typehand == 1){
         vel_low = {{ Auth::user()->clasp_l }} ;
         vel_high = {{ Auth::user()->ignore_l }} ;
        }
        else if(typehand == 2){
         vel_low = {{ Auth::user()->clasp_r }} ;
         vel_high = {{ Auth::user()->ignore_r }} ;
        }
        else if(typehand == 3){
         vel_low = {{ Auth::user()->pleats_l }} ;
         vel_high = {{ Auth::user()->ignore_l }} ;
        }
        else if(typehand == 4){
         vel_low = {{ Auth::user()->pleats_r }} ;
         vel_high = {{ Auth::user()->ignore_r }} ;
        }
        else if(typehand == 5){
         vel_low = {{ Auth::user()->ignore_l }} - 0.05 ;
         vel_high = {{ Auth::user()->ignore_l }} ;
        }
        else if(typehand == 6){
         vel_low = {{ Auth::user()->ignore_r }} - 0.05 ;
         vel_high = {{ Auth::user()->ignore_r }} ;
        }

        var heart = 3;
        var flagstart = 0;
        var flagbar = 0;
        var timeleft = 5;
        var round = 1;
        var score = 0;


        if(handstr=="left") {
                var str = "ซ้าย";
        }else{
            var str = "ขวา";
        }

        if(flagstart == 2){
            
        }
      </script>
    @endforeach

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Sarabun', sans-serif;
        }
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

        #myProgress {
        width: 100%;
        background-color: #fff;
        }

        #myBar {
        width: 1%;
        height: 30px;
        background-color: #CC66FF;
        }
    </style>

<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="background-color: #ED4C67 ;">
            <div class="container">
                <a class="navbar-brand">
                    <table  >
                        <tbody >
                          <tr>
                            <td rowspan="2" >
                                <a class="navbar-brand" href="{{ url('/') }}" >
                                    <img src="{{ asset('pic/bannerpic.png') }}"  height="90px" >
                                </a>
                            </td>
                            <td class="d-flex-colum align-items-end text-white " rowspan="2">
                                <div class="font-weight-bolder"><h5>ระบบบำบัดฟื้นฟูผู้ป่วยโรคพาร์กินสัน</h5> </div>
                                @if (Route::is('showdoctorLogin'))
                                <div class="font-weight-bolder"><h6>แพทย์ผู้ดูแลรักษากลุ่มโรคความเคลื่อนไหวผิดปกติ</h6></div>
                                @else 
                                <div class="font-weight-bolder"><h6>ผู้ป่วยกลุ่มโรคความเคลื่อนไหวผิดปกติ</h6></div>
                                @endif
                            </td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody>
                        </table>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item-center">
                            <div id="picheart"></div>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <div class="nav-link text-white" >{{ __('เลขประจำตัวผู้ป่วย : ') }}{{ Auth::user()->username }}</div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="background-color: #ED4C67 ;">
            <div class="container" >
                <div id="myProgress">
                    <div id="myBar"></div>
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
