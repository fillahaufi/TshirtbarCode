<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return view('admin/admin');
    }

    public function manage() {
        return view('admin/manage');
    }

    public function payment() {
        return view('admin/payment');
    }

    public function request() {
        return view('admin/request');
    }

    public function supplier() {
        return view('supp/supplier');
    }
}
