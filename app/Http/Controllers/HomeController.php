<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index 
    public function index() {
        return view('landing');
    }
    // registration
    public function registration(){
        return view('registration');
    }
    // login 
    public function login() {
        return view('login');
    }
    // checkstatus
    public function checkstatus() {
        return view('checkstatus');
    }
    // contact-us
    public function contactus() {
        return view('contactus');
    }
}
