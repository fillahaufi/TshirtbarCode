<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('cust/homepage');
    }

    public function harga() {
        return view('cust/harga');
    }

    public function about() {
        return view('cust/about');
    }

    public function riwayat() {
        return view('cust/riwayat');
    }

    public function profil() {
        return view('cust/profil');
    }

    public function custom() {
        return view('cust/custom');
    }

    public function checkout() {
        return view('cust/checkout');
    }

    public function transaksi() {
        return view('cust/transaksi');
    }
}
