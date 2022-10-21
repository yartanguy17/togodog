<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('website.pages.product-detail');
    }
    public function getAlimentation(){
        return view('website.pages.alimentation');
    }
}
