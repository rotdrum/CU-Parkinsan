@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เกม Leap box mode</div>

                <div class="card-body" align="center" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-group" >
                        เกมฝึกการกำมือ
                    </div>
                    <div class="text-group" align="left">
                       <a  href="">- ด่านที่ 1</a>
                    </div>
                    <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 2</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 3</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 4</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 5</a>
                     </div>

                     <div class="text-group" >
                        เกมฝึกการจีบนิ้ว
                    </div>
                    <div class="text-group" align="left">
                       <a  href="">- ด่านที่ 1</a>
                    </div>
                    <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 2</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 3</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 4</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 5</a>
                     </div>

                     <div class="text-group" >
                        เกมฝึกการสะบัดมือ
                    </div>
                    <div class="text-group" align="left">
                       <a  href="">- ด่านที่ 1</a>
                    </div>
                    <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 2</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 3</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 4</a>
                     </div>
                     <div class="text-group" align="left">
                        <a  href="">- ด่านที่ 5</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
