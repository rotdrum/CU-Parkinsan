@extends('layouts.appdoctor')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://www.rapidtables.com/calc/calc2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script> 
    var count = 0 ;
    var ignore_l = [];
    var ignore_r = [];
    var clasp_l = [];
    var clasp_r = [];
    var pleats_l = [];
    var pleats_r = [];
    var d = [];
    var mo = [];
    var y = [];
    var i=0;
    var j=0;
    var d2 = [];
    var mo2 = [];
    var y2 = [];
</script>
@php
    $count1 = 0;
    $count2 = 0;
     $count3 = 0;
     $count4 = 0;
     $count5 = 0;
     $count6 = 0;
@endphp

@foreach ($exercises as $exercise)
<script> 
    count++;
</script>
@endforeach

@foreach ($exercises as $exercise)
<script> 
    var do_ignore_l = {{ $exercise->do_ignore_l }} ; 
    var do_ignore_r = {{ $exercise->do_ignore_r }} ; 
    if(do_ignore_l == 0.0000){

    }
    else if(do_ignore_r == 0.0000){

    }
    else{
        ignore_l[i] = {{ $exercise->ex_ignore_l }} ;
        ignore_r[i] = {{ $exercise->ex_ignore_r }} ;
        clasp_l[i] = {{ $exercise->ex_clasp_l }} ;
        clasp_r[i] = {{ $exercise->ex_clasp_r }} ;
        pleats_l[i] = {{ $exercise->ex_pleats_l }} ;
        pleats_r[i] = {{ $exercise->ex_pleats_r }} ;
        d[i] = {{ $exercise->created_at->format('d') }} ;
        mo[i] = {{ $exercise->created_at->format('m') - 1 }}  ;
        y[i] = {{ $exercise->created_at->format('Y') }} ;
    }
    i = i + 1;
</script>
@endforeach

@foreach ($games as $game)
@if($game->type == 1)
    @php $count1++  @endphp
@elseif($game->type == 2)
    @php $count2++  @endphp
@elseif($game->type == 3)
    @php $count3++  @endphp
@elseif($game->type == 4)
    @php $count4++  @endphp
@elseif($game->type == 5)
    @php $count5++  @endphp
@elseif($game->type == 6)
    @php $count6++  @endphp
@else

@endif

<script>
    d2[j] = {{ $game->created_at->format('d') }} ;
    mo2[j] = {{ $game->created_at->format('m') }} ;
    y2[j] = {{ $game->created_at->format('Y') }} ;
    j = j + 1;
</script>
@endforeach

<script>


window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title:{
	},
	axisX: {
		valueFormatString: "DD MMM,YYYY"
	},
	axisY: {
		title: "Value Hands (in °cos θ )",
		includeZero: false,
		suffix: " °"
	},
	legend:{
		cursor: "pointer",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	toolTip:{
		shared: true
	},
	data: [{
		name: "left hand",
		type: "spline",
		yValueFormatString: "#0.#### °",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(y[0],mo[0],d[0]), y: Math.acos(ignore_l[0]) * 180 / Math.PI },
			{ x: new Date(y[1],mo[1],d[1]), y: Math.acos(ignore_l[1]) * 180 / Math.PI },
			{ x: new Date(y[2],mo[2],d[2]), y: Math.acos(ignore_l[2]) * 180 / Math.PI },
			{ x: new Date(y[3],mo[3],d[3]), y: ignore_l[3] },
			{ x: new Date(y[4],mo[4],d[4]), y: ignore_l[4] },
			{ x: new Date(y[5],mo[5],d[5]), y: ignore_l[5] },
			{ x: new Date(y[6],mo[6],d[6]), y: ignore_l[6] },
            { x: new Date(y[7],mo[7],d[7]), y: ignore_l[7] },
			{ x: new Date(y[8],mo[8],d[8]), y: ignore_l[8] },
			{ x: new Date(y[9],mo[9],d[9]), y: ignore_l[9] },
			{ x: new Date(y[10],mo[10],d[10]), y: ignore_l[10] },
		]
	},
	{
		name: "right hand",
		type: "spline",
		yValueFormatString: "#0.#### °",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(y[0],mo[0],d[0]), y: Math.acos(ignore_r[0]) * 180 / Math.PI },
			{ x: new Date(y[1],mo[1],d[1]), y: Math.acos(ignore_r[1]) * 180 / Math.PI },
			{ x: new Date(y[2],mo[2],d[2]), y: Math.acos(ignore_r[2]) * 180 / Math.PI },
			{ x: new Date(y[3],mo[3],d[3]), y: ignore_r[3] },
			{ x: new Date(y[4],mo[4],d[4]), y: ignore_r[4] },
			{ x: new Date(y[5],mo[5],d[5]), y: ignore_r[5] },
			{ x: new Date(y[6],mo[6],d[6]), y: ignore_r[6] }, 
            { x: new Date(y[7],mo[7],d[7]), y: ignore_r[7] },
			{ x: new Date(y[8],mo[8],d[8]), y: ignore_r[8] },
			{ x: new Date(y[9],mo[9],d[9]), y: ignore_r[9] }, 
            { x: new Date(y[10],mo[10],d[10]), y: ignore_r[10] }, 
		]
	}]
});
chart.render();
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

var chart = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        title:{
        },
        axisX: {
            valueFormatString: "DD MMM,YYYY"
        },
        axisY: {
            title: "Value Hands (in °cos θ )",
            includeZero: false,
            suffix: " °"
        },
        legend:{
            cursor: "pointer",
            fontSize: 16,
            itemclick: toggleDataSeries
        },
        toolTip:{
            shared: true
        },
        data: [{
            name: "left hand",
            type: "spline",
            yValueFormatString: "#0.#### °",
            showInLegend: true,
            dataPoints: [
                { x: new Date(y[0],mo[0],d[0]), y: Math.acos(clasp_l[0]) * 180 / Math.PI },
                { x: new Date(y[1],mo[1],d[1]), y: Math.acos(clasp_l[1]) * 180 / Math.PI },
                { x: new Date(y[2],mo[2],d[2]), y: Math.acos(clasp_l[2]) * 180 / Math.PI  },
                { x: new Date(y[3],mo[3],d[3]), y: clasp_l[3] },
                { x: new Date(y[4],mo[4],d[4]), y: clasp_l[4] },
                { x: new Date(y[5],mo[5],d[5]), y: clasp_l[5] },
                { x: new Date(y[6],mo[6],d[6]), y: clasp_l[6] },
                { x: new Date(y[7],mo[7],d[7]), y: clasp_l[7] },
                { x: new Date(y[8],mo[8],d[8]), y: clasp_l[8] },
                { x: new Date(y[9],mo[9],d[9]), y: clasp_l[9] },
                { x: new Date(y[10],mo[10],d[10]), y: clasp_l[10] },
            ]
        },
        {
            name: "right hand",
            type: "spline",
            yValueFormatString: "#0.#### °",
            showInLegend: true,
            dataPoints: [
                { x: new Date(y[0],mo[0],d[0]), y: Math.acos(clasp_r[0]) * 180 / Math.PI },
                { x: new Date(y[1],mo[1],d[1]), y: Math.acos(clasp_r[1]) * 180 / Math.PI  },
                { x: new Date(y[2],mo[2],d[2]), y: Math.acos(clasp_r[2]) * 180 / Math.PI },
                { x: new Date(y[3],mo[3],d[3]), y: clasp_r[3] },
                { x: new Date(y[4],mo[4],d[4]), y: clasp_r[4] },
                { x: new Date(y[5],mo[5],d[5]), y: clasp_r[5] },
                { x: new Date(y[6],mo[6],d[6]), y: clasp_r[6] }, 
                { x: new Date(y[7],mo[7],d[7]), y: clasp_r[7] },
                { x: new Date(y[8],mo[8],d[8]), y: clasp_r[8] },
                { x: new Date(y[9],mo[9],d[9]), y: clasp_r[9] }, 
                { x: new Date(y[10],mo[10],d[10]), y: clasp_r[10] }, 
            ]
        }]
    });
    chart.render();
    function toggleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        }
        else{
            e.dataSeries.visible = true;
        }
        chart.render();
    }


    var chart = new CanvasJS.Chart("chartContainer3", {
        animationEnabled: true,
        title:{
        },
        axisX: {
            valueFormatString: "DD MMM,YYYY"
        },
        axisY: {
            title: "Value Hands (in °cos θ)",
            includeZero: false,
            suffix: " °"
        },
        legend:{
            cursor: "pointer",
            fontSize: 16,
            itemclick: toggleDataSeries
        },
        toolTip:{
            shared: true
        },
        data: [{
            name: "left hand",
            type: "spline",
            yValueFormatString: "#0.#### °",
            showInLegend: true,
            dataPoints: [
                { x: new Date(y[0],mo[0],d[0]), y: Math.acos(pleats_l[0]) * 180 / Math.PI  },
                { x: new Date(y[1],mo[1],d[1]), y: Math.acos(pleats_l[1]) * 180 / Math.PI  },
                { x: new Date(y[2],mo[2],d[2]), y: Math.acos(pleats_l[2]) * 180 / Math.PI },
                { x: new Date(y[3],mo[3],d[3]), y: pleats_l[3] },
                { x: new Date(y[4],mo[4],d[4]), y: pleats_l[4] },
                { x: new Date(y[5],mo[5],d[5]), y: pleats_l[5] },
                { x: new Date(y[6],mo[6],d[6]), y: pleats_l[6] },
                { x: new Date(y[7],mo[7],d[7]), y: pleats_l[7] },
                { x: new Date(y[8],mo[8],d[8]), y: pleats_l[8] },
                { x: new Date(y[9],mo[9],d[9]), y: pleats_l[9] },
                { x: new Date(y[10],mo[10],d[10]), y: pleats_l[10] },
            ]
        },
        {
            name: "right hand",
            type: "spline",
            yValueFormatString: "#0.#### °",
            showInLegend: true,
            dataPoints: [
                { x: new Date(y[0],mo[0],d[0]), y: Math.acos(pleats_r[0]) * 180 / Math.PI  },
                { x: new Date(y[1],mo[1],d[1]), y: Math.acos(pleats_r[1]) * 180 / Math.PI },
                { x: new Date(y[2],mo[2],d[2]), y: Math.acos(pleats_r[2]) * 180 / Math.PI  },
                { x: new Date(y[3],mo[3],d[3]), y: pleats_r[3] },
                { x: new Date(y[4],mo[4],d[4]), y: pleats_r[4] },
                { x: new Date(y[5],mo[5],d[5]), y: pleats_r[5] },
                { x: new Date(y[6],mo[6],d[6]), y: pleats_r[6] }, 
                { x: new Date(y[7],mo[7],d[7]), y: pleats_r[7] },
                { x: new Date(y[8],mo[8],d[8]), y: pleats_r[8] },
                { x: new Date(y[9],mo[9],d[9]), y: pleats_r[9] }, 
                { x: new Date(y[10],mo[10],d[10]), y: pleats_r[10] }, 
            ]
        }]
    });
    chart.render();
    function toggleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        }
        else{
            e.dataSeries.visible = true;
        }
        chart.render();
    }


}

</script>

<script>
    /* window.onload = function () {
   
    
    } */
    </script>


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
                                <h5 class="text-white">{{ __('ข้อมูลผู้ป่วย') }}</h5>
                            </td>
                            <td width="40%" align="center">
                               
                            </td>
                            <td width="30%" align="right">
                                <a class="btn btn-link text-white"  href="#link" >
                                    กราฟรายงาน >
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
                    @endforeach
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
            <div class="card-header  bgcolor text-white">
                            <h5>{{ __('อัตราการชนะเกม') }}</h5>
            </div>
            <div class="card-body" >
                <div style="height : 15px"></div>
                <canvas  id="myChart" style="height: 220px; width: 115%;"></canvas>
                <div style="height : 15px"></div>
            </div>
    </div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('ประวัติการเล่นเกม ท่าทางกำมือ') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChart2" style="height: 300px; width: 100%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('ประวัติการเล่นเกม ท่าทางจีบนิ้ว') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChart3" style="height: 300px; width: 100%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('ประวัติการเล่นเกม ท่าทางสะบัดมือ') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChart4" style="height: 300px; width: 100%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
                    <th scope="col" style="text-align:center">แบมือซ้าย</th>
                    <th scope="col" style="text-align:center">กำมือซ้าย</th>
                    <th scope="col" style="text-align:center">จีบนิ้วซ้าย</th>
                    <th scope="col" style="text-align:center">แบมือขวา</th>
                    <th scope="col" style="text-align:center">กำมือขวา</th>
                    <th scope="col" style="text-align:center">จีบนิ้วขวา</th>
                    <th scope="col">สถานะ</th>
                    <td></td>
                </tr>
            </thead>
            <tbody style="background-color:#EEEEEE;">
                <input type="hidden" value=" {{ $count = 0 }}">
                @foreach ($exercises as $exercise)
                <tr>
                    <input type="hidden" value="{{ $count++ }}">
                    <th scope="row" style="text-align:center">{{ $count }}</th>
                    <td>{{ $exercise->created_at }}</td>
                    <td style="text-align:center">
                    @if ( $exercise->do_ignore_r == 0 )
                        <img src='{{ asset('pic/up.png') }}' height='25px'>
                    @else
                        <img src='{{ asset('pic/ture.png') }}' height='20px'>
                    @endif
                    </td>

                    <td style="text-align:center">
                        @if ( $exercise->do_clasp_r == 0 )
                            <img src='{{ asset('pic/up.png') }}' height='25px'>
                        @else
                            <img src='{{ asset('pic/ture.png') }}' height='20px'>
                        @endif
                        </td>

                        <td style="text-align:center">
                            @if ( $exercise->do_pleats_r == 0 )
                                <img src='{{ asset('pic/up.png') }}' height='25px'>
                            @else
                                <img src='{{ asset('pic/ture.png') }}' height='20px'>
                            @endif
                            </td>

                            <td style="text-align:center">
                                @if ( $exercise->do_ignore_l == 0 )
                                    <img src='{{ asset('pic/up.png') }}' height='25px'>
                                @else
                                    <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                @endif
                                </td>

                                <td style="text-align:center">
                                    @if ( $exercise->do_clasp_l == 0 )
                                        <img src='{{ asset('pic/up.png') }}' height='25px'>
                                    @else
                                        <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                    @endif
                                    </td>

                                    <td style="text-align:center">
                                        @if ( $exercise->do_pleats_l == 0 )
                                            <img src='{{ asset('pic/up.png') }}' height='25px'>
                                        @else
                                            <img src='{{ asset('pic/ture.png') }}' height='20px'>
                                        @endif
                                        </td>

             
                    <td> 
                    @if ( ($exercise->do_ignore_r == 0) and
                          ($exercise->do_clasp_r == 0) and
                          ($exercise->do_pleats_r == 0) and
                          ($exercise->do_ignore_l == 0) and
                          ($exercise->do_clasp_l == 0) and
                          ($exercise->do_pleats_l == 0) )
                        รอการบำบัด
                    @else
                        บำบัดแล้ว
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


<div style="height : 30px"></div>
<div class="form-group row">
</div>

<div class="container">
<div class="row justify-content-center"> 
<div class="col-md-10">
    <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);" id="link">
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('เวลาของผลการใช้งานแบบทดสอบ ทั้งหมด 6 ท่าทาง') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChartb2" style="height: 300px; width: 150%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('เวลาของการใช้งานท่าทางแบมือ') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChartc1" style="height: 180px; width: 135%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
            <div class="card-header  bgcolor text-white">
                            <h5>{{ __('แบบทดสอบท่าทางการแบมือ (0 °)') }}</h5>
            </div>
            <div class="card-body" >
                <div style="height : 15px"></div>
                <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
                <div style="height : 15px"></div>
            </div>
    </div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('เวลาของการใช้งานท่าทางกำมือ') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChartc2"  style="height: 180px; width: 135%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('แบบทดสอบท่าทางการกำมือ  (180 °)') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
            <div style="height : 15px"></div>
        </div>
</div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('เวลาของการใช้งานท่าทางจีบนิ้ว') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <canvas  id="myChartc3"  style="height: 180px; width: 135%;"></canvas>
            <div style="height : 15px"></div>
        </div>
</div>
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
        <div class="card-header  bgcolor text-white">
                        <h5>{{ __('แบบทดสอบท่าทางการจีบนิ้วมือ  (140 °)') }}</h5>
        </div>
        <div class="card-body" >
            <div style="height : 15px"></div>
            <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
            <div style="height : 15px"></div>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            'กำมือซ้าย',
            'กำมือขวา',
            'จีบนิ้วมือซ้าย',
            'จีบนิ้วมือขวา',
            'สะบัดมือซ้าย',
            'สะบัดมือขวา',
         ],
        datasets: [{
            label: 'จำนวนด่านทั้งหมด',
            data: [5, 5, 5, 5, 5, 5],
            backgroundColor: 
                'rgba(255, 99, 132, 0.2)',
            borderColor: 
                'rgba(255, 99, 132, 1)',
            borderWidth: 3
        }, {
            label: 'ผู้ป่วยถึงด่าน',
            data: [{{ $count1 }}, {{ $count2 }}, {{ $count3 }}, {{ $count4 }}, {{ $count5 }}, {{ $count6 }}],
            backgroundColor: 
                'rgba(255, 159, 64, 0.2)',
            borderColor: 
                'rgba(255, 159, 64, 1)',
            borderWidth: 3
            
        }    
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 5
            }
        }
    }


});


var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            y2[0].toString()+"-"+mo2[0].toString()+"-"+d2[0].toString(),
            y2[1].toString()+"-"+mo2[1].toString()+"-"+d2[1].toString(),
            y2[2].toString()+"-"+mo2[2].toString()+"-"+d2[2].toString(),
            y2[3].toString()+"-"+mo2[3].toString()+"-"+d2[3].toString(),
            y2[4].toString()+"-"+mo2[4].toString()+"-"+d2[4].toString(),
            y2[5].toString()+"-"+mo2[5].toString()+"-"+d2[5].toString(),
            y2[6].toString()+"-"+mo2[6].toString()+"-"+d2[6].toString(),
            y2[7].toString()+"-"+mo2[7].toString()+"-"+d2[7].toString(),
         ],
        datasets: [
        {
            label: 'คะแนนกำมือซ้าย'  , 
                
            data: [7, 8, 8, 8, 8, 9,10,10],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 3
        },

        {
            label: 'คะแนนกำมือขวา'  , 
                
            data: [7, 7, 8, 9, 10, 10,10,10],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 3
        }
        
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 10
            }
        }
    }


});



var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            y2[0].toString()+"-"+mo2[0].toString()+"-"+d2[0].toString(),
            y2[1].toString()+"-"+mo2[1].toString()+"-"+d2[1].toString(),
            y2[2].toString()+"-"+mo2[2].toString()+"-"+d2[2].toString(),
            y2[3].toString()+"-"+mo2[3].toString()+"-"+d2[3].toString(),
            y2[4].toString()+"-"+mo2[4].toString()+"-"+d2[4].toString(),
            y2[5].toString()+"-"+mo2[5].toString()+"-"+d2[5].toString(),
            y2[6].toString()+"-"+mo2[6].toString()+"-"+d2[6].toString(),
            y2[7].toString()+"-"+mo2[7].toString()+"-"+d2[7].toString(),
         ],
        datasets: [
        {
            label: 'คะแนนจีบนิ้วมือซ้าย'  , 
                
            data: [7, 8, 8, 8, 8, 8, 9, 9],
            backgroundColor: [ 
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 3
        },

        {
            label: 'คะแนนจีบนิ้วมือขวา'  , 
                
            data: [7, 7, 7, 7, 7, 7, 7, 8],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 3
        }
        
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 10
            }
        }
    }


});


var ctx = document.getElementById('myChart4').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            y2[0].toString()+"-"+mo2[0].toString()+"-"+d2[0].toString(),
            y2[1].toString()+"-"+mo2[1].toString()+"-"+d2[1].toString(),
            y2[2].toString()+"-"+mo2[2].toString()+"-"+d2[2].toString(),
            y2[3].toString()+"-"+mo2[3].toString()+"-"+d2[3].toString(),
            y2[4].toString()+"-"+mo2[4].toString()+"-"+d2[4].toString(),
            y2[5].toString()+"-"+mo2[5].toString()+"-"+d2[5].toString(),
            y2[6].toString()+"-"+mo2[6].toString()+"-"+d2[6].toString(),
            y2[7].toString()+"-"+mo2[7].toString()+"-"+d2[7].toString(),
         ],
        datasets: [
        {
            label: 'คะแนนสะบัดมือซ้าย'  , 
                
            data: [7, 7, 7, 7, 8, 9,10,10],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 3
        },

        {
            label: 'คะแนนสะบัดมือขวา'  , 
                
            data: [7, 7, 7, 9, 9, 9,9,10],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 3
        }
        
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 10
            }
        }
    }


});


var ctx = document.getElementById('myChartb2');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            y[0].toString()+"-"+(mo[0] + 1)+"-"+d[0].toString(),
            y[1].toString()+"-"+(mo[0] + 1)+"-"+d[1].toString(),
            y[2].toString()+"-"+(mo[0] + 1)+"-"+d[2].toString(),
        ],
        datasets: [{
            label: 'นาทีที่ใช้งาน',
            data: [5, 4, 2],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    }
    ,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


var ctx = document.getElementById('myChartc1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            y[0].toString()+"-"+(mo[0] + 1)+"-"+d[0].toString(),
            y[1].toString()+"-"+(mo[0] + 1)+"-"+d[1].toString(),
            y[2].toString()+"-"+(mo[0] + 1)+"-"+d[2].toString(),
         ],
        datasets: [{
            label: 'แบมือซ้าย (นาที)',
            data: [2, 1.5, 0.5],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 3
        }, {
            label: 'แบมือขวา (นาที)',
            data: [1, 0.5, 0.5],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 3
            
        }    
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 3
            }
        }
    }


});


var ctx = document.getElementById('myChartc2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            y[0].toString()+"-"+(mo[0] + 1)+"-"+d[0].toString(),
            y[1].toString()+"-"+(mo[0] + 1)+"-"+d[1].toString(),
            y[2].toString()+"-"+(mo[0] + 1)+"-"+d[2].toString(),
         ],
        datasets: [{
            label: 'กำมือซ้าย (นาที)',
            data: [2, 1.5, 0.5],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 3
        }, {
            label: 'กำมือขวา (นาที)',
            data: [2, 1.5, 0.5],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 3
            
        }    
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 3
            }
        }
    }


});


var ctx = document.getElementById('myChartc3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 
            y[0].toString()+"-"+(mo[0] + 1)+"-"+d[0].toString(),
            y[1].toString()+"-"+(mo[0] + 1)+"-"+d[1].toString(),
            y[2].toString()+"-"+(mo[0] + 1)+"-"+d[2].toString(),
         ],
        datasets: [{
            label: 'จีบนิ้วมือซ้าย (นาที)',
            data: [2, 1.5, 0.5],
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 3
        }, {
            label: 'จีบนิ้วมือขวา (นาที)',
            data: [1, 0.5, 0.5],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 3
            
        }    
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true ,
                type: 'linear',
                min: 0,
                max: 3
            }
        }
    }


});
</script>
<div style="height : 30px"></div>
@include('layouts.bottom')
@endsection
