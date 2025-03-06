<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request){
        $param = $request->param2;
        return view('halo')->with('param', $param);



        // return "ini adalah parameter websitenya " . $param;
    }

    public function viewIndex(){
        return view('product.index');
    }
}
