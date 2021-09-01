@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header  bg-primary text-white"><h5>หน้าแรก</h5></div>

                <div class="card-body" align="center" >
                    <table class="table table-striped" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล 5</th>
                                <th scope="col" style="text-align:center">เลเวล 4</th>
                                <th scope="col" style="text-align:center">เลเวล 3</th>
                                <th scope="col" style="text-align:center">เลเวล 2</th>
                                <th scope="col" style="text-align:center">เลเวล 1</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                                <td scope="col" style="text-align:center">ยากมาก</td>
                                <td scope="col" style="text-align:center">ยาก</td>
                                <td scope="col" style="text-align:center">ปานกลาง</td>
                                <td scope="col" style="text-align:center">ง่าย</td>
                                <td scope="col" style="text-align:center">ง่่ายมาก</td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="height: 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection