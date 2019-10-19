<?php

namespace App\Http\Controllers;


use App\UserOreder;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $seen = UserOreder::where('seen',0)->get();

        return view('home')->with('seen',$seen);
    }
    public function contactus(){
        return view('contactus');
    }
}
