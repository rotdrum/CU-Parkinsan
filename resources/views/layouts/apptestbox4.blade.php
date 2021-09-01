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
    <script src="{{ asset('js/leapRL.js') }}"></script>
    <script src="{{ asset('js/leap-plugins-0.1.6.js') }}"></script>
    <script src="{{ asset('js/three.js') }}"></script>

    <!--  Scripts Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    @foreach ($exercises as $exercise)
    <script>
        var vel_exercise = {{ $exercise->ex_ignore_r }} ;
    </script>
    @endforeach


    <script>
    var count = 0;
    var flag = 0;
    var flaghand = 0 ;
    var handstr = "right";
    var haveLoggedFrame = false;
    var controller = new Leap.Controller({enableGestures: true});
    controller.loop(function(frame) {
        if(flag == 0){
            if(frame.dump() == handstr){
            document.getElementById("vel_ex").innerHTML = vel_exercise ;
            document.getElementById("typehand").innerHTML = "ถูกต้อง";
            var hand = frame.hands[0];
            if (hand){
                var dot = Leap.vec3.dot(hand.direction, hand.indexFinger.direction);
                var elem = document.getElementById("myBar");
                var width = dot*100;
                elem.style.width = width + "%";
                console.assert(!isNaN(dot));
                document.getElementById("vel").innerHTML = dot.toPrecision(4);
                if(dot >= vel_exercise){
                    Swal.fire({
                        icon: 'success',
                        title: 'คุณผ่านแล้ว!',
                        showConfirmButton: false,
                        html: 'คลิกเพื่อทำแบบทดสอบท่าต่อไป :)<br/><form method="POST" action="{{ route("updateboxmode4") }}" >@csrf<input type="hidden" name="id" id="id_ex"><br/><input type="hidden" name="value_" id="vels"><br/><input type="submit" value="Next" class="btn btn-primary"></form>',
                    })
                    document.getElementById("id_ex").value = {{ $exercise->id }};
                    document.getElementById("vels").value = dot.toPrecision(4);

                    /*swal({
                        title: "คุณผ่านแล้ว! ",
                        text: "คลิกเพื่อทำแบบทดสอบท่าต่อไป :)",
                        icon: "success"
                    }).then(function() {
                        window.location = '{{ route('updateboxmode1', ['id'=> $exercise->id , 'value'=>  123 ,]) }}'; 
                    });*/
                   

                    /* swal("คุณผ่านแล้ว!", "คลิกเพื่อทำแบบทดสอบท่าต่อไป", "success"); */
                    flag = 1;
                }
            } 
            }
            else if(frame.dump() == ""){
                if(count == 500) { 
                    swal({
                        title: "คุณไม่ผ่าน!",
                        text: "พยายามต่อไปนะคะ :)",
                        icon: "warning"
                    }).then(function() {
                        window.location = "{{ route('testmode') }}";
                    });
                    /* swal("คุณไม่ผ่าน!", "พยายามต่อไปนะคะ :)", "warning");  */
                    flag=10; 
                } 
                count++;
            }
            else{
                document.getElementById("typehand").innerHTML = "เปลี่ยนมือ";
            }
        }
        else if(flag==1){

        }
        else if(flag==10){
               /* window.location.href = "{{ route('testmode') }}" ; */
        }

    });

    </script>
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

<body style="background-color: #F7C9C9 ;">
    <div id="app" >
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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <div  class="nav-link" style="color:#fff;" ><h4>คำสั่ง : แบมือขวา</h4></div>
                        </li>
                        <li class="nav-item">  
                            <div id="vel_ex" class="nav-link" style="color:#ED4C67;"></div>
                        </li>   
                        <li class="nav-item">  
                            <div id="vel" class="nav-link" style="color:#ED4C67;" ></div>
                        </li>
                        <li class="nav-item">  
                            <div  class="nav-link" style="color:#ED4C67;">มือซ้าย</div>
                        </li>
                        <li class="nav-item">  
                            <div id="typehand" class="nav-link" style="color:#ED4C67;"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}" style="color:#fff;">{{ __('เลขประจำตัวผู้ป่วย : ') }}{{ Auth::user()->username }}</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ED4C67 ;">
            <div class="container">
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


