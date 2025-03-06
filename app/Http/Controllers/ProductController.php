<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $param = 15*15;
        return "ini dafter produk " . $param;
    }

    public function viewIndex(){
        return view('product.index');
    }
}
