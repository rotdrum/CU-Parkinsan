<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeNotLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }
    
    public function recommend()
    {
        return view('recommend');
    }
    
    public function vrrecommend()
    {
        return view('vrrecommend');
    }

        
    public function boxrecommend()
    {
        return view('boxrecommend');
    }

}
