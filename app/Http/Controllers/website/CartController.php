<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        return view('website.pages.cart');
    }
}
