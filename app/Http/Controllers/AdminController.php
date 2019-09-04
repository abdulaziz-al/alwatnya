<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // admin index page (dashboard)
    public function index() {
        return view('admin.index');
    }
    // admin settings page:
    public function settings() {
        return view('admin.settings');
    }
    // 1 admin settings page / subadmins page
    public function subadmins() {
        return view('admin.subadmins');
    }
    // 2 admin/settings/subadmins/ create a new sub-admin page
    public function newSubAdmin() {
        return view('admin.newsubadmin');
    }
    // 3 admin/settings/subadmins/ view a sub-admin info page
    public function viewsubadmin() {
        return view('admin.viewsubadmin');
    }
    // 4 admin/settings/password change password page
    public function password() {
        return view('admin.changepassword');
    }
    // 5 admin/settings/orderStatuses view orders statuses page
    public function orderStatuses() {
        return view('admin.statuses');
    }

    // admin quick links:
    // 1 admin/ create new user
    public function createUser() {
        return view('admin.newuser');
    }
    // 2 admin/neworders page
    public function newOrders() {
        return view('admin.neworders');
    }
    // 3 admin/completedorders page
    public function completedOrders() {
        return view('admin.completed');
    }
    // 4 admin/returnedorders page
    public function returnedOrders() {
        return view('admin.returnedorders');
    }
    // 5 admin/vieworder page
    public function viewOrder() {
        return view('admin.vieworder');
    }
    // 6 admin/search page
    public function search() {
        return view('admin.search');
    }
    // admin logout
    public function logout() {
        // logout & end sessions
    }
}
