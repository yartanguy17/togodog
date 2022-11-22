<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function index($id){
        $ID = Crypt::decrypt($id);
        $product=Product::findOrFail($ID);
        // dd($product);
        return view('website.pages.product-detail',compact('product'));
    }
    public function getAlimentation(){

        return view('website.pages.alimentation');
    }


}
