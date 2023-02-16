<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index(){
        return view('ProductType.index');
    }
}
