@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0 2px 3px rgba(0,0,0,0.3);">
                <div class="card-header  bg-primary text-white"><h5>ตั้งค่าเวลาเกม</h5></div>
                <div class="card-body" align="center" >   
                    <div class="form-group row bg-info">
                        <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('เกมท่าทางการกำมือ') }}</h5></label>
                    </div>
                    <table class="table table-striped" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="15%" style="text-align:center"></th>
                                <th scope="col" style="text-align:center">เลเวล 5</th>
                                <th scope="col" style="text-align:center">เลเวล 4</th>
                                <th scope="col" style="text-align:center">เลเวล 3</th>
                                <th scope="col" style="text-align:center">เลเวล 2</th>
                                <th scope="col" style="text-align:center">เลเวล 1</th>
                                <th scope="col" width="10%" style="text-align:center"></th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            <tr>
                            <form method="POST" action="{{ route('updatesettinggame1') }}">
                            @csrf
                                <th scope="col" style="text-align:left;">มือซ้าย</th>
                                @foreach ($games as $game)
                                    @if($game->type == 1)
                                        <td> <input  type="text" class="form-control" name="value{{$game->lavel}}" value="{{ $game->timer }}"></td>
                                    @endif
                                @endforeach
                                <td> 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ตั้งค่า') }}
                                </button>
                                </td> 
                            </form>
                            </tr>
                            <tr>
                            <form method="POST" action="{{ route('updatesettinggame2') }}">
                            @csrf    
                                <th scope="col" style="text-align:left">มือขวา</th>
                                @foreach ($games as $game)
                                    @if($game->type == 2)
                                    <td> <input  type="text" class="form-control" name="value{{$game->lavel}}" value="{{ $game->timer }}"></td>
                                    @endif
                                @endforeach
                                <td>              
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ตั้งค่า') }}
                                </button>
                                </td>
                            </form>
                            </tr>
                        </tbody>
                    </table>

                    <div class="form-group row bg-info">
                        <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('เกมท่าทางการจีบนิ้ว') }}</h5></label>
                    </div>
                    <table class="table table-striped" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="15%" style="text-align:center"></th>
                                <th scope="col" style="text-align:center">เลเวล 5</th>
                                <th scope="col" style="text-align:center">เลเวล 4</th>
                                <th scope="col" style="text-align:center">เลเวล 3</th>
                                <th scope="col" style="text-align:center">เลเวล 2</th>
                                <th scope="col" style="text-align:center">เลเวล 1</th>
                                <th scope="col" width="10%" style="text-align:center"></th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            <tr>
                            <form method="POST" action="{{ route('updatesettinggame3') }}">
                            @csrf
                                <th scope="col" style="text-align:left;">มือซ้าย</th>
                                @foreach ($games as $game)
                                    @if($game->type == 1)
                                        <td> <input  type="text" class="form-control" name="value{{$game->lavel}}" value="{{ $game->timer }}"></td>
                                    @endif
                                @endforeach
                                <td> 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ตั้งค่า') }}
                                </button>
                                </td> 
                            </form>
                            </tr>
                            <tr>
                            <form method="POST" action="{{ route('updatesettinggame4') }}">
                            @csrf    
                                <th scope="col" style="text-align:left">มือขวา</th>
                                @foreach ($games as $game)
                                    @if($game->type == 2)
                                    <td> <input  type="text" class="form-control" name="value{{$game->lavel}}" value="{{ $game->timer }}"></td>
                                    @endif
                                @endforeach
                                <td>              
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ตั้งค่า') }}
                                </button>
                                </td>
                            </form>
                            </tr>
                        </tbody>
                    </table>


                    <div class="form-group row bg-info">
                        <label for="" class="col-md col-form-label text-md-center"><h5>{{ __('เกมท่าทางการสะบัดมือ') }}</h5></label>
                    </div>
                    <table class="table table-striped" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="15%" style="text-align:center"></th>
                                <th scope="col" style="text-align:center">เลเวล 5</th>
                                <th scope="col" style="text-align:center">เลเวล 4</th>
                                <th scope="col" style="text-align:center">เลเวล 3</th>
                                <th scope="col" style="text-align:center">เลเวล 2</th>
                                <th scope="col" style="text-align:center">เลเวล 1</th>
                                <th scope="col" width="10%" style="text-align:center"></th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#EEEEEE;">
                            <tr>
                            <form method="POST" action="{{ route('updatesettinggame5') }}">
                            @csrf
                                <th scope="col" style="text-align:left;">มือซ้าย</th>
                                @foreach ($games as $game)
                                    @if($game->type == 1)
                                        <td> <input  type="text" class="form-control" name="value{{$game->lavel}}" value="{{ $game->timer }}"></td>
                                    @endif
                                @endforeach
                                <td> 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ตั้งค่า') }}
                                </button>
                                </td> 
                            </form>
                            </tr>
                            <tr>
                            <form method="POST" action="{{ route('updatesettinggame6') }}">
                            @csrf    
                                <th scope="col" style="text-align:left">มือขวา</th>
                                @foreach ($games as $game)
                                    @if($game->type == 2)
                                    <td> <input  type="text" class="form-control" name="value{{$game->lavel}}" value="{{ $game->timer }}"></td>
                                    @endif
                                @endforeach
                                <td>              
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ตั้งค่า') }}
                                </button>
                                </td>
                            </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection