<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // user index page (dashboard)
    public function index() {
        return view('users.index');
    }
    // user/settings page:
    public function settings() {
        return view('users.settings');
    }
    // 1 user/settings/info page
    public function viewInfoPage() {
        return view('users.info');
    }
    // 2 user/settings/info/edit page
    public function viewEditPage() {
        return view('users.editinfo');
    }
    // 3 user/settings/password
    public function password() {
        return view('users.changepassword');
    }
    // 4 user/settings/crs page
    public function viewCRs() {
        return view('users.viewCRs');
    }
    // 5 user/settings/crs/edit page
    public function crEditView() {
        return view('users.editcr');
    }

    // user quick links:
    // 1 user/neworder page
    public function newOrder() {
        return view('users.neworder');
    }
}
