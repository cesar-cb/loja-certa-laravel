<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Http\Controllers\Controller;

class StoresController extends Controller
{
    public function get(Request $request) {
        $product = api('api/product/1', 'GET');
        
        return view('home', ['product' => $product]);
    }
}
