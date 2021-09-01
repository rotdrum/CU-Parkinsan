@extends('layouts.app')
@section('content')
<div style="height: 15px;">
</div>
<div class="container">
    <div class="row justify-content-center">
    <div class="nav-link border border-dark rounded bgcolor text-white" style="box-shadow: 0 1px 2px rgba(0,0,0,0.5);"  >
        <p>
          <h2  style="text-align: center;">㊀ เกม</h2>
        </p>  
        <div >
        <h4> <a class="text-white" href="{{ route('playmethod') }}">> กติกาเกมและวิธีการเล่นเกม</a></h4>
         </div>  
    </div>
    </div>
  
</div>
<div style="height: 30px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;">  
                    <h5>ฟื้นฟูการกำมือซ้าย</h5>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <table class="table table-striped">
                        <thead  class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col" style="text-align:center"  >เลือกโหมดเกม</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            @foreach ($cl_games as $cl_game)
                            <tr>
                                <th scope="row" style="text-align:center">{{ $cl_game->lavel }}</th>
                                <td> กำมือซ้าย 7/10 ครั้งขึ้นไป จับเวลาครั้งละ {{ $cl_game->timer }} วินาที</td>
                                <td style="text-align:center">
                                    <div class="row justify-content-center" >
                                    <form method="POST" action="{{ route('creategamebox') }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $cl_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $cl_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $cl_game->type }}" >
                                        <input type="submit" style="background-color:#d966ff;" name="box" class="btn btn-link text-white btnbgcolor" value="{{ __('box') }}">  
                                    </form>
                                    <div  style="padding: 0px 3px;"></div>
                                    <form method="POST" action="{{ route('creategamevr') }}">
                                    @csrf
                                    
                                        <input type="hidden" name="id" value="{{ $cl_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $cl_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $cl_game->type }}" >
                                        <input type="submit" style="background-color:#6699FF;"  name="vr" class="btn btn-link text-white btnbgcolor" value="{{ __('vr') }}"> 
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;">
                    <h5>ฟื้นฟูการกำมือขวา</h5>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <table class="table table-striped" >
                        <thead  class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col" style="text-align:center">เลือกโหมดเกม</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            @foreach ($cr_games as $cr_game)
                            <tr>
                                <th scope="row" style="text-align:center">{{ $cr_game->lavel }}</th>
                                <td> กำมือขวา 7/10 ครั้งขึ้นไป จับเวลาครั้งละ {{ $cr_game->timer }} วินาที</td>
                                <td style="text-align:center">
                                    <div class="row justify-content-center" >
                                    <form method="POST" action="{{ route('creategamebox') }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $cr_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $cr_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $cr_game->type }}" >
                                        <input type="submit" style="background-color:#d966ff;" name="box" class="btn btn-link text-white btnbgcolor" value="{{ __('box') }}">  
                                    </form>
                                    <div  style="padding: 0px 3px;"></div>
                                    <form method="POST" action="{{ route('creategamevr') }}">
                                    @csrf
                                    
                                        <input type="hidden" name="id" value="{{ $cr_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $cr_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $cr_game->type }}" >
                                        <input type="submit" style="background-color:#6699FF;"  name="vr" class="btn btn-link text-white btnbgcolor" value="{{ __('vr') }}"> 
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>

    </div>
</div>
<div style="height: 20px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;">  
                    <h5>ฟื้นฟูการจีบนิ้วมือซ้าย</h5>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <table class="table table-striped">
                        <thead  class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col" style="text-align:center">เลือกโหมดเกม</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            @foreach ($pl_games as $pl_game)
                                <tr>
                                <th scope="row" style="text-align:center">{{ $pl_game->lavel }}</th>
                                <td> จีบนิ้ว 7/10 ครั้งขึ้นไป จับเวลาครั้งละ {{ $pl_game->timer }} วินาที</td>
                                <td style="text-align:center">
                                    <div class="row justify-content-center" >
                                    <form method="POST" action="{{ route('creategamebox') }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $pl_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $pl_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $pl_game->type }}" >
                                        <input type="submit" style="background-color:#d966ff;" name="box" class="btn btn-link text-white btnbgcolor" value="{{ __('box') }}">  
                                    </form>
                                    <div  style="padding: 0px 3px;"></div>
                                    <form method="POST" action="{{ route('creategamevr') }}">
                                    @csrf
                                    
                                        <input type="hidden" name="id" value="{{ $pl_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $pl_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $pl_game->type }}" >
                                        <input type="submit" style="background-color:#6699FF;"  name="vr" class="btn btn-link text-white btnbgcolor" value="{{ __('vr') }}"> 
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;">
                    <h5>ฟื้นฟูการจีบนิ้วมือขวา</h5>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <table class="table table-striped" >
                        <thead  class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col" style="text-align:center">เลือกโหมดเกม</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            @foreach ($pr_games as $pr_game)
                                <tr>
                                <th scope="row" style="text-align:center">{{ $pr_game->lavel }}</th>
                                <td> จีบนิ้ว 7/10 ครั้งขึ้นไป จับเวลาครั้งละ {{ $pr_game->timer }} วินาที</td>
                                <td style="text-align:center">
                                    <div class="row justify-content-center" >
                                    <form method="POST" action="{{ route('creategamebox') }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $pr_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $pr_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $pr_game->type }}" >
                                        <input type="submit" style="background-color:#d966ff;" name="box" class="btn btn-link text-white btnbgcolor" value="{{ __('box') }}">  
                                    </form>
                                    <div  style="padding: 0px 3px;"></div>
                                    <form method="POST" action="{{ route('creategamevr') }}">
                                    @csrf
                                    
                                        <input type="hidden" name="id" value="{{ $pr_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $pr_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $pr_game->type }}" >
                                        <input type="submit" style="background-color:#6699FF;"  name="vr" class="btn btn-link text-white btnbgcolor" value="{{ __('vr') }}"> 
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>
<div style="height: 20px;">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center; background-color: #FF3399 ;">  
                    <h5>ฟื้นฟูการสะบัดมือซ้าย</h5>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <table class="table table-striped">
                        <thead  class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col" style="text-align:center">เลือกโหมดเกม</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            @foreach ($sl_games as $sl_game)
                            <tr>
                                <th scope="row" style="text-align:center">{{ $sl_game->lavel }}</th>
                                <td> สะบัดมือ 7/10 ครั้งขึ้นไป จับเวลาครั้งละ {{ $sl_game->timer }} วินาที</td>
                                <td style="text-align:center">
                                    <div class="row justify-content-center" >
                                    <form method="POST" action="{{ route('creategamebox') }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $sl_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $sl_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $sl_game->type }}" >
                                        <input type="submit" style="background-color:#d966ff;" name="box" class="btn btn-link text-white btnbgcolor" value="{{ __('box') }}">  
                                    </form>
                                    <div  style="padding: 0px 3px;"></div>
                                    <form method="POST" action="{{ route('creategamevr') }}">
                                    @csrf
                                    
                                        <input type="hidden" name="id" value="{{ $sl_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $sl_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $sl_game->type }}" >
                                        <input type="submit" style="background-color:#6699FF;"  name="vr" class="btn btn-link text-white btnbgcolor" value="{{ __('vr') }}"> 
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header text-white bgcolor" style="text-align:center;" >
                    <h5>ฟื้นฟูการสะบัดมือขวา</h5>
                </div>
                <div class="card-body" style="text-align:center;" >
                    <table class="table table-striped" >
                        <thead  class="thead thead-dark">
                            <tr>
                                <th scope="col" style="text-align:center">เลเวล</th>
                                <th scope="col">คำอธิบาย</th>
                                <th scope="col" style="text-align:center">เลือกโหมดเกม</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            @foreach ($sr_games as $sr_game)
                            <tr>
                                <th scope="row" style="text-align:center">{{ $sr_game->lavel }}</th>
                                <td> สะบัดมือ 7/10 ครั้งขึ้นไป จับเวลาครั้งละ {{ $sr_game->timer }} วินาที</td>
                                <td style="text-align:center">
                                    <div class="row justify-content-center" >
                                    <form method="POST" action="{{ route('creategamebox') }}">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $sr_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $sr_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $sr_game->type }}" >
                                        <input type="submit" style="background-color:#d966ff;" name="box" class="btn btn-link text-white btnbgcolor" value="{{ __('box') }}">  
                                    </form>
                                    <div  style="padding: 0px 3px;"></div>
                                    <form method="POST" action="{{ route('creategamevr') }}">
                                    @csrf
                                    
                                        <input type="hidden" name="id" value="{{ $sr_game->id }}" >
                                        <input type="hidden" name="lavel" value="{{ $sr_game->lavel }}" >
                                        <input type="hidden" name="type" value="{{ $sr_game->type }}" >
                                        <input type="submit" style="background-color:#6699FF;"  name="vr" class="btn btn-link text-white btnbgcolor" value="{{ __('vr') }}"> 
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>
</div>
<div style="height: 20px;">
</div>
<nav class="shadow-sm bottom" >
    <div class="container">
        <div class="font-weight-bolder text-white font-italic"><center>Copyright © 2019 K.Kiatiikun, W.Washirawit <br/> King Mongkut's University of Technology North Bangkok.</center></div>
    <div>
</nav>
@endsection
