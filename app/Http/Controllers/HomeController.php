<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function service() {
        return view('service');
    }

    public function product(){
        return view('product', [
            "nama_produk" => "produks",
            "produks" => produk::all()
        ]);
    }

    public function why(){
        return view('why');
    }
}
