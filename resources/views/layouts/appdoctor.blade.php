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
    <script src="{{ asset('leapmotion/leap-0.6.4.js') }}"></script>

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
<style>
    #tname:focus  {
        border-color: #3366ff;
        box-shadow: 0 1px 1px #3366ff inset, 0 0 8px #3366ff;
        outline: 0 none
    }
    input[type=email]:focus ,input[type=username]:focus , input[type=text]:focus, input[type=password]:focus {
        border-color: #3366ff;
        box-shadow: 0 1px 1px #3366ff inset, 0 0 8px #3366ff;
        outline: 0 none;}
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="  background: #30336b;">
            <div class="container">
                @foreach ($doctors as $doctor)
                <a class="navbar-brand" href="{{ route('showdoctorhome', ['id'=>$doctor->id]) }}">
                    <table >
                        <tbody >
                          <tr>
                            <td rowspan="2" >
                                <a class="navbar-brand" href="{{ route('showdoctorhome', ['id'=>$doctor->id]) }}" >
                                    <img src="{{ asset('pic/bannerpic.png') }}"  height="90px" >
                                </a>
                                
                            </td>
                            <td class="d-flex-colum align-items-end text-white " rowspan="2">
                                <div class="font-weight-bolder" ><h5>ระบบบำบัดฟื้นฟูผู้ป่วยโรคพาร์กินสัน</h5> </div>
                                <div class="font-weight-bolder"><h6>แพทย์ผู้ดูแลรักษากลุ่มโรคความเคลื่อนไหวผิดปกติ</h6></div>
                            </td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody>
                        </table>
                </a>
                @endforeach
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
                        
                        @foreach ($doctors as $doctor)
                            <li class="nav-item">
                                    <table height="63px">
                                    <tr>
                                    <td>
                                    <a class="btn btn-link text-white"  style="padding: 0px 10px;" href="{{ route('showprofile', ['id'=>$doctor->id]) }}">{{ __('แพทย์ : ') }}
                                        {{$doctor->fname}} 
                                    </a>
                                    <td>
                                    </tr>
                                    </table>
                            
                            <li class="nav-item">
                                <table height="63px">
                                    <tr>
                                    <td>
                                <a class="btn btn-link  text-white"  style="padding: 0px 3px;" href="{{ route('showdoctorhome', ['id'=>$doctor->id]) }}">{{ __('หน้าแรก') }}</a>
                                <td>
                                </tr>
                                </table>
                            </li>  
                            <li class="nav-item" >
                                <table height="63px">
                                <tr>
                                <td>
                                <a class="btn btn-link  text-white"  style="padding: 0px 3px;" href="{{ route('showdoctorregister', ['id'=>$doctor->id]) }}">{{ __('ลงทะเบียนผู้ป่วย') }}</a>
                                <td>
                                </tr>
                                </table>
                            </li>
                            <li class="nav-item">
                                <table  height="63px">
                                    <tr>
                                    <td>
                                <a class="btn btn-link  text-white"  style="padding: 0px 3px;" href="{{ route('showdoctortest', ['id'=>$doctor->id]) }}">{{ __('แบบทดสอบ') }}</a>
                                <td>
                                </tr>
                                </table>
                            </li>  
                            <li class="nav-item">
                                <table  height="63px">
                                    <tr>
                                    <td>
                                <a class="btn btn-link  text-white"  style="padding: 0px 3px;"  href="{{ route('showdoctorreport', ['id'=>$doctor->id]) }}">{{ __('รายงานผล') }}</a>
                                <td>
                                </tr>
                                </table>
                            </li>  
                            <li class="nav-item">
                                <table height="63px">
                                    <tr>
                                    <td>
                                <a class="btn btn-link  text-white"  style="padding: 0px 3px;" href="{{ route('showdoctorrecommend', ['id'=>$doctor->id]) }}">{{ __('วิธีใช้และการตั้งค่า') }}</a>
                                <td>
                                </tr>
                                </table>
                            </li>

                            <li class="nav-item" >
                                <table >
                                    <tbody >
                                      <tr>
                                        <td>
                                            <a class="btn btn-link  text-white"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" ><img src="{{ asset('pic/logout.png') }}"  height="47px" ></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>    
                            </table>
                            </li>
                        @endforeach

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
